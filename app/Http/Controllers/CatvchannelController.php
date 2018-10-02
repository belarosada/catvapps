<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    	$kode_channel 	= $request->kode_channel;

    	DB::table('catv_channel')->insert(['kode_channel' => $kode_channel]);

    	// flashy()->success('Berhasil menyimpan data');
		return redirect('masterdata/catv_channel');
    }

    public function delete($id)
    {
        DB::table('catv_channel')->where('id', $id)->delete();

        // flashy()->success('Berhasil menghapus data');
        return redirect('masterdata/catv_channel');
    }
}
