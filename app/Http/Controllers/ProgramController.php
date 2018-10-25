<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;

class ProgramController extends Controller
{
    public function index()
    {
    	$rs           = DB::table('program')
                        ->select('program.id', 'kode_channel', 'program')
                        ->join('catv_channel', 'program.id_channel', 'catv_channel.id')
                        ->get();
        return view('masterdata.program', ['rs' => $rs]);
    }

    public function add()
    {
        $kode_channel = DB::table('catv_channel')->select('id','kode_channel')->get();
    	return view('masterdata.programbaru', ['kode_channel' => $kode_channel]);
    }

    public function store(Request $request)
    {
        $check  = DB::table('program')->where('id_channel', $request->kode_channel)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$kode_channel 	= $request->kode_channel;
        $program 	    = $request->program;

    	DB::table('program')->insert(['id_channel' => $kode_channel, 'program' => $program]);

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/program');
    }

    public function editView($id)
    {
        $kode_channel = DB::table('catv_channel')->select('id','kode_channel')->get();

        $rs = DB::table('program')
                ->select('catv_channel.kode_channel', 'program', 'program.id', 'id_channel')
                ->join('catv_channel', 'program.id_channel', 'catv_channel.id')
                ->where('program.id', $id)
                ->first();

    	return view('masterdata.programedit', ['rs' => $rs, 'kode_channel' => $kode_channel]);
    }

    public function edit(Request $request)
    {

        $id                = $request->id;
        $program           = $request->program;
        $program_lama      = $request->program_lama;
        $kode_channel      = $request->kode_channel;
        $kode_channel_lama = $request->kode_channel_lama;

        /*if ($program_lama != $program) {
            $check  = DB::table('program')->where('program', $program)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }

        if ($kode_channel_lama != $kode_channel) {
            $check  = DB::table('program')->where('id_channel', $kode_channel)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }*/

        DB::table('program')->where('id', $id)->update(['id_channel' => $kode_channel, 'program' => $program]);

        alert()->success('Sukses', 'Berhasil Mengubah Data')->persistent(true);
        return redirect('masterdata/program');
    }

    public function delete($id)
    {
        DB::table('program')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menghapus Data')->persistent(true);
        return redirect('masterdata/program');
    }
}
