<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GmapsController extends Controller
{
    public function index()
    {
        return view('transaksi.gmaps');
    }
}
