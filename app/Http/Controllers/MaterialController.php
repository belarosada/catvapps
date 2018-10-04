<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MaterialController extends Controller
{
    public function index()
    {
    	$rs = DB::table('material')->get();
        return view('masterdata.material', ['rs' => $rs]);
    }

    public function add()
    {
    	return view('masterdata.materialbaru');
    }

    public function store(Request $request)
    {
        $check  = DB::table('material')->where('nama_material', $request->nama_material)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$nama_material 	= $request->nama_material;

    	DB::table('material')->insert(['nama_material' => $nama_material]);

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/material');
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
        DB::table('material')->where('id', $id)->delete();

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/material');
    }
}
