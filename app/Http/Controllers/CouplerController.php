<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CouplerController extends Controller
{
    public function index()
    {
    	$rs = DB::table('coupler')
                ->select('coupler.id', 'tanggal_tr', 'kode_channel', 'frekuensi', 'program', 'rf_level', 'level_tr', 'cnr_tr', 'nama_box', 'jenis_material', 'inout')
                ->join('catv_channel', 'coupler.id_channel', 'catv_channel.id')
                ->join('box', 'coupler.id_box', 'box.id')
                ->join('jenis_material', 'coupler.id_jenis_material', 'jenis_material.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
                ->get();
        return view('transaksi.coupler', ['rs' => $rs]);
    }

    public function add(Request $request)
    {

        $rs            = DB::table('catv_channel')
                           ->select('catv_channel.id', 'kode_channel', 'frekuensi', 'rf_level', 'program')
                           ->join('program', 'catv_channel.id', 'program.id_channel')
                           ->get();

        $box = DB::table('box')->get();
        $material = DB::table('jenis_material')->get();

    	return view('transaksi.couplerbaru', ['rs' => $rs, 'box' => $box, 'material' => $material]);
    }

    public function store(Request $request)
    {
    	$id_box 		= $request->id_box;
    	$id_jenis_material = $request->id_jenis_material;
       	$inout 			= $request->inout;
        $data_level     = json_decode($request->data_level, true);
        $tanggal_tr	    = date('Y-m-d');

        foreach ($data_level as $val) {
            DB::table('coupler')
            ->insert(['tanggal_tr' => $tanggal_tr, 'level_tr' => $val['level'], 'id_channel' => $val['id_channel'], 'cnr_tr' => $val['cnr'], 'id_box' => $id_box, 'id_jenis_material' => $id_jenis_material, 'inout' => $inout]);
        }

        return response()->json(["responses" => "OK"]);
    }
}
