<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JenisMaterialController extends Controller
{
    public function index()
    {
    	$rs           = DB::table('jenis_material')
                        ->select('jenis_material.id', 'nama_material', 'jenis_material')
                        ->join('material', 'jenis_material.id_material', 'material.id')
                        ->get();
        return view('masterdata.jenis_material', ['rs' => $rs]);
    }

    public function add()
    {
        $nama_material = DB::table('material')->select('id','nama_material')->get();
    	return view('masterdata.jenis_materialbaru', ['nama_material' => $nama_material]);
    }

    public function store(Request $request)
    {
        $check  = DB::table('jenis_material')->where('jenis_material', $request->jenis_material)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$nama_material 	= $request->nama_material;
        $jenis_material = $request->jenis_material;

    	DB::table('jenis_material')->insert(['id_material' => $nama_material, 'jenis_material' => $jenis_material]);

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/jenis_material');
    }

    public function editView($id)
    {
        $material = DB::table('material')->select('id','nama_material')->get();

        $rs = DB::table('jenis_material')
                ->select('material.nama_material', 'jenis_material', 'jenis_material.id', 'id_material')
                ->join('material', 'jenis_material.id_material', 'material.id')
                ->where('jenis_material.id', $id)
                ->first();

    	return view('masterdata.jenis_materialedit', ['rs' => $rs, 'nama_material' => $material]);
    }

    public function edit(Request $request)
    {
        $id                     = $request->id;
        $jenis_material         = $request->jenis_material;
        $jenis_material_lama    = $request->jenis_material_lama;
        $nama_material          = $request->nama_material;
        $nama_material_lama     = $request->nama_material_lama;

        DB::table('jenis_material')->where('id', $id)->update(['id_material' => $nama_material, 'jenis_material' => $jenis_material]);

        alert()->success('Sukses', 'Berhasil Mengubah Data')->persistent(true);
    	return redirect('masterdata/jenis_material');
    }

    public function delete($id)
    {
        DB::table('jenis_material')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/jenis_material');
    }
}
