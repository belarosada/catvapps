<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class CatvChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path() . '/csv/catv_channel.csv';
        $csv = Reader::createFromPath($file);

        foreach ($csv as $record) {
            DB::table('catv_channel')
            ->insert([

                'kode_channel' 	=> $record[0],
                'frekuensi' 	=> $record[1],
                'rf_level' 		=> $record[2],

            ]);
        }
    }
}
