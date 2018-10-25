<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;

class CatvchannelController extends Controller
{
    public function index()
    {
    	$rs = DB::table('catv_channel')->get();
        return view('masterdata.catv_channel', ['rs' => $rs]);
    }

    public function add()
    {
    	return view('masterdata.catv_channelbaru');
    }

    public function store(Request $request)
    {
        $check  = DB::table('catv_channel')->where('kode_channel', $request->kode_channel)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$kode_channel 	= $request->kode_channel;
        $frekuensi 	    = $request->frekuensi;
        $rf_level 	    = $request->rf_level;

    	DB::table('catv_channel')->insert(['kode_channel' => $kode_channel, 'frekuensi' => $frekuensi, 'rf_level' => $rf_level]);

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/catv_channel');
    }

    public function editView($id)
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

        alert()->success('Sukses', 'Berhasil Mengubah Data')->persistent(true);
        return redirect('masterdata/catv_channel');
    }

    public function delete($id)
    {
        DB::table('catv_channel')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menghapus Data')->persistent(true);
        return redirect('masterdata/catv_channel');
    }
}
