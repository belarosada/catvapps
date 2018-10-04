<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BoxController extends Controller
{
    public function index()
    {
    	$rs = DB::table('box')
                ->select('box.id', 'nama_area', 'nama_box')
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

    	DB::table('box')->insert(['nama_box' => $nama_box, 'id_area' => $nama_area]);

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		return redirect('masterdata/box');
    }

    public function editView($id)
    {
        $rs = DB::table('box')->where('id', $id)->first();
    	return view('masterdata.boxedit', ['rs' => $rs]);
    }

    /*public function edit(Request $request)
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
        return redirect('masterdata/box');
    }
*/
    public function delete($id)
    {
        DB::table('box')->where('id', $id)->delete();

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/box');
    }
}
