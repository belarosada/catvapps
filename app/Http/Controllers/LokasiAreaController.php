<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LokasiAreaController extends Controller
{
    public function index()
    {
    	$rs = DB::table('lokasi_area')->get();
        return view('masterdata.lokasi_area', ['rs' => $rs]);
    }

    public function add()
    {
    	return view('masterdata.lokasi_areabaru');
    }

    public function store(Request $request)
    {
        $check  = DB::table('lokasi_area')->where('nama_area', $request->nama_area)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$nama_area 	= $request->nama_area;

    	DB::table('lokasi_area')->insert(['nama_area' => $nama_area]);

        alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/lokasi_area');
    }

    public function editView($id)
    {
        $rs = DB::table('lokasi_area')->where('id', $id)->first();
    	return view('masterdata.lokasi_areaedit', ['rs' => $rs]);
    }

    public function edit(Request $request)
    {

        $id                     = $request->id;
        $nama_area              = $request->nama_area;
        $nama_area_lama         = $request->nama_area_lama;

        if ($nama_area_lama != $nama_area) {
            $check  = DB::table('lokasi_area')->where('nama_area', $nama_area)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }

        DB::table('lokasi_area')->where('id', $id)->update(['nama_area' => $nama_area]);

        alert()->success('Sukses', 'Berhasil Mengupdate Data')->persistent(true);
        return redirect('masterdata/lokasi_area');
    }

    public function delete($id)
    {
        DB::table('lokasi_area')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menghapus Data')->persistent(true);
        return redirect('masterdata/lokasi_area');
    }
}
