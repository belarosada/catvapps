<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $table = 'test_result';

    protected $fillable = [
    	'id',
    	'id_channel',
    	'level_tr',
    	'cnr_tr',
    	'tanggal_tr',
    	'realisasi',
    	'audio_level',
    ];
}
