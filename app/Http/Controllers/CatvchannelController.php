<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatvchannelController extends Controller
{
    public function index()
    {
        return view('masterdata.catv_channel');
    }
}
