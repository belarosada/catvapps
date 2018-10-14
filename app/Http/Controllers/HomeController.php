<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$tanggal	= date('Y-m-d');
    	$a = DB::table('test_result')
    			->select('level_tr')
    			->join('catv_channel', 'test_result.id_channel', 'catv_channel.id')
    			->where('tanggal_tr', $tanggal)
    			->where('kode_channel', 'S1')
    			->first();		
    	// return $a;

    	$b = DB::table('falcom_tx')
    			->select('level_falcom')
    			->join('catv_channel', 'falcom_tx.id_channel', 'catv_channel.id')
    			->where('tanggal_falcom', $tanggal)
    			->where('kode_channel', 'S1')
    			->first();

    	if ($a->level_tr >= 50 && $a->level_tr <= 90) {
    		if ($b->level_falcom >= 50 && $b->level_falcom <= 90) {
    			$condition = 'good';
    		} else {
    			$condition = 'not good';
    		}
    	} else  {
    		$condition = 'bad';
    	}

    	return $condition;

    	return $b;
        return view('home');
    }
}
