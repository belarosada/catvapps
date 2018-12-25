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

    public function editView($id)
    {
        $rs = DB::table('material')->where('id', $id)->first();
    	return view('masterdata.materialedit', ['rs' => $rs]);
    }

    public function edit(Request $request)
    {

        $id                     = $request->id;
        $nama_material           = $request->nama_material;
        $nama_material_lama      = $request->nama_material_lama;

        /*if ($kode_channel_lama != $kode_channel) {
            $check  = DB::table('catv_channel')->where('kode_channel', $kode_channel)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }*/

        DB::table('material')->where('id', $id)->update(['nama_material' => $nama_material]);

        alert()->success('Sukses', 'Berhasil Mengubah Data')->persistent(true);
        return redirect('masterdata/material');
    }

    public function delete($id)
    {
        DB::table('material')->where('id', $id)->delete();

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/material');
    }
}
