<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataHeadendController extends Controller
{
    public function index()
    {
    	$tanggal	= date('Y-m-d');
    	$a = DB::table('test_result')
    			->select('catv_channel.kode_channel', 'frekuensi' , 'program', 'rf_level')
    			->selectRaw("(SELECT IF(level_tr >= 50 AND level_tr <= 90, 'good', 'bad')) as kondisi")
    			->join('catv_channel', 'test_result.id_channel', 'catv_channel.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
                ->where('tanggal_tr', $tanggal)
    			->get();

        $b = DB::table('falcom_tx')
    			->select('catv_channel.kode_channel', 'frekuensi' , 'program', 'rf_level')
    			->selectRaw("(SELECT IF(level_falcom >= 50 AND level_falcom <= 90, 'good', 'bad')) as kondisi")
    			->join('catv_channel', 'falcom_tx.id_channel', 'catv_channel.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
    			->where('tanggal_falcom', $tanggal)
    			->get();

        $c = DB::table('foxcom_tx')
    			->select('catv_channel.kode_channel', 'frekuensi' , 'program', 'rf_level')
    			->selectRaw("(SELECT IF(level_foxcom >= 50 AND level_foxcom <= 90, 'good', 'bad')) as kondisi")
    			->join('catv_channel', 'foxcom_tx.id_channel', 'catv_channel.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
    			->where('tanggal_foxcom', $tanggal)
    			->get();


        return view('transaksi/dataheadend', ['a' => $a, 'b' => $b, 'c' => $c]);
    }
}
