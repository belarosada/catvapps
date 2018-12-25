<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BoxController extends Controller
{
    public function index()
    {
    	$rs = DB::table('box')
                ->select('box.id', 'nama_area', 'nama_box', 'ukuran_box')
                ->join('lokasi_area', 'box.id_area', 'lokasi_area.id')
                ->get();
        return view('masterdata.box', ['rs' => $rs]);
    }

    public function add()
    {
        $lokasi_area = DB::table('lokasi_area')->select('id','nama_area')->get();
    	return view('masterdata.boxbaru', ['lokasi_area' => $lokasi_area]);
    }

    public function store(Request $request)
    {
        $check  = DB::table('box')->where('nama_box', $request->nama_box)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }

    	$nama_area 	= $request->nama_area;
        $nama_box 	= $request->nama_box;
        $ukuran_box = $request->ukuran_box;

    	DB::table('box')->insert(['nama_box' => $nama_box, 'id_area' => $nama_area, 'ukuran_box' => $ukuran_box]);

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/box');
    }

    public function editView($id)
    {
        $lokasi_area = DB::table('lokasi_area')->select('id','nama_area')->get();

        $rs = DB::table('box')
                ->select('lokasi_area.nama_area', 'nama_box', 'ukuran_box', 'box.id', 'id_area')
                ->join('lokasi_area', 'box.id_area', 'lokasi_area.id')
                ->where('box.id', $id)
                ->first();

    	return view('masterdata.boxedit', ['rs' => $rs, 'lokasi_area' => $lokasi_area]);
    }

    public function edit(Request $request)
    {

        $id                = $request->id;
        $box               = $request->nama_box;
        $box_lama          = $request->nama_box_lama;
        $nama_area         = $request->nama_area;
        $nama_area_lama    = $request->nama_area_lama;
        $ukuran_box               = $request->ukuran_box;
        $ukuran_box_lama          = $request->ukuran_box_lama;

        /*if ($box_lama != $box) {
            $check  = DB::table('box')->where('nama_box', $box)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }

        if ($nama_area_lama != $nama_area) {
            $check  = DB::table('box')->where('id_area', $nama_area)->first();

            if (!empty($check)) {
                return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
            }
        }*/

        DB::table('box')->where('id', $id)->update(['id_area' => $nama_area, 'nama_box' => $box, 'ukuran_box' => $ukuran_box]);

        alert()->success('Sukses', 'Berhasil Mengupdate Data')->persistent(true);
        return redirect('masterdata/box');
    }

    public function delete($id)
    {
        DB::table('box')->where('id', $id)->delete();

        alert()->success('Sukses', 'Berhasil Menghapus Data')->persistent(true);
        return redirect('masterdata/box');
    }
}
