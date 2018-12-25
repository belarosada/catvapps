<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CouplerController extends Controller
{
    public function index()
    {
    	$rs = DB::table('field')
                ->select('field.id', 'tanggal', 'kode_channel', 'frekuensi', 'program', 'rf_level', 'level', 'nama_area', 'nama_box', 'nama_material', 'jenis_material', 'inout')
                ->join('catv_channel', 'field.id_channel', 'catv_channel.id')
                ->join('lokasi_area', 'field.id_area', 'lokasi_area.id')
                ->join('box', 'field.id_box', 'box.id')
                ->join('material', 'field.id_material', 'material.id')
                ->join('jenis_material', 'field.id_jenis_material', 'jenis_material.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
                ->get();
        return view('transaksi.coupler', ['rs' => $rs]);
    }

    public function add(Request $request)
    {

        $rs     = DB::table('catv_channel')
                           ->select('catv_channel.id', 'kode_channel', 'frekuensi', 'rf_level', 'program')
                           ->join('program', 'catv_channel.id', 'program.id_channel')
                           ->get();
        $area   = DB::table('lokasi_area')->get();
        $material = DB::table('material')->get();

    	return view('transaksi.couplerbaru', ['rs' => $rs, 'area' => $area, 'material' => $material]);
    }

    public function store(Request $request)
    {
        $id_area 		     = $request->id_area;
    	$id_box 		     = $request->id_box;
        $id_material         = $request->id_material;
    	$id_jenis_material   = $request->id_jenis_material;
       	$inout 			     = $request->inout;
        $data_level          = json_decode($request->data_level, true);
        $tanggal	         = date('Y-m-d');

        foreach ($data_level as $val) {
            DB::table('field')
            ->insert(['tanggal' => $tanggal, 'level' => $val['level'], 'id_channel' => $val['id_channel'], 'id_area' => $id_area, 'id_box' => $id_box, 'id_material' => $id_material, 'id_jenis_material' => $id_jenis_material, 'inout' => $inout]);
        }

        return response()->json(["responses" => "OK"]);
    }

    public function pull(Request $request)
    {
        if ($request->has('id_area')) {
             $id_area       = $request->id_area;
             $rs            = DB::table('box')
                                ->select('id', 'nama_box', DB::raw('CONCAT(id, " - ", nama_box) as display'))
                                ->where('id_area', $id_area)
                                ->get();

             return response()->json($rs);
        }

        if ($request->has('id_material')) {
             $id_material   = $request->id_material;
             $rs            = DB::table('jenis_material')
                                ->select('id', 'jenis_material', DB::raw('CONCAT(id, " - ", jenis_material) as display'))
                                ->where('id_material', $id_material)
                                ->get();

             return response()->json($rs);
        }
    }
}
