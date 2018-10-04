<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    /*public function editView($id)
    {
        $rs = DB::table('catv_channel')->where('id', $id)->first();
    	return view('masterdata.catv_channeledit', ['rs' => $rs]);
    }

    public function edit(Request $request)
    {

        $id                     = $request->id;
        $kode_channel           = $request->kode_channel;
        $kode_channel_lama      = $request->kode_channel_lama;
        $frekuensi              = $request->frekuensi;
        $rf_level               = $request->rf_level;

        if ($kode_channel_lama != $kode_channel) {
            $check  = DB::table('catv_channel')->where('kode_channel', $kode_channel)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }

        DB::table('catv_channel')->where('id', $id)->update(['kode_channel' => $kode_channel, 'frekuensi' => $frekuensi, 'rf_level' => $rf_level]);

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/catv_channel');
    }*/

    public function delete($id)
    {
        DB::table('program')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/program');
    }
}
