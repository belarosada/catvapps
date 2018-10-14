<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FoxcomTxController extends Controller
{
    public function index()
    {
    	$rs = DB::table('foxcom_tx')
                ->select('foxcom_tx.id', 'tanggal_falcom', 'kode_channel', 'frekuensi', 'program', 'rf_level', 'level_falcom', 'cnr_falcom')
                ->join('catv_channel', 'foxcom_tx.id_channel', 'catv_channel.id')
                ->join('program', 'catv_channel.id', 'program.id_channel')
                ->get();
        return view('transaksi.foxcom_tx', ['rs' => $rs]);
    }

    public function add(Request $request)
    {

        $rs            = DB::table('catv_channel')
                           ->select('catv_channel.id', 'kode_channel', 'frekuensi', 'rf_level', 'program')
                           ->join('program', 'catv_channel.id', 'program.id_channel')
                           ->get();

    	return view('transaksi.falcom_txbaru', ['rs' => $rs]);
    }

    /*public function pull(Request $request)
    {
        if ($request->has('kode_channel')) {
             $kode_channel  = $request->kode_channel;
             $rs            = DB::table('catv_channel')
                                ->select('frekuensi', 'rf_level', 'program')
                                ->join('program', 'catv_channel.id', 'program.id_channel')
                                ->where('id', $kode_channel)
                                ->first();

             return response()->json($rs);
        }
    }*/

    public function store(Request $request)
    {
        /*$check  = DB::table('catv_channel')->where('kode_channel', $request->kode_channel)->first();

        if (!empty($check)) {
            return response()->json( [ 'status' => 'Failed', 'message' => 'Duplicate' ] );
        }*/
        $data_level         = json_decode($request->data_level, true);
        $tanggal_foxcom	    = date('Y-m-d');

        foreach ($data_level as $val) {
            DB::table('foxcom_tx')
            ->insert(['tanggal_foxcom' => $tanggal_foxcom, 'level_foxcom' => $val['level'], 'id_channel' => $val['id_channel'], 'cnr_foxcom' => $val['cnr']]);
        }
    	// DB::table('catv_channel')->insert(['kode_channel' => $kode_channel, 'frekuensi' => $frekuensi, 'rf_level' => $rf_level]);

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
		// return redirect('masterdata/catv_channel');
        return response()->json(["responses" => "OK"]);
    }

    public function editView($id)
    {
        $rs = DB::table('catv_channel')->where('id', $id)->first();
    	return view('masterdata.catv_channeledit', ['rs' => $rs]);
    }

    public function edit(Request $request)
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
        return redirect('masterdata/catv_channel');
    }

    public function delete($id)
    {
        DB::table('catv_channel')->where('id', $id)->delete();

        // alert()->success('Sukses', 'Berhasil Menyimpan Data')->persistent(true);
        return redirect('masterdata/catv_channel');
    }
}
