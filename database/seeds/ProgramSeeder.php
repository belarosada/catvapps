<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path() . '/csv/program.csv';
        $csv = Reader::createFromPath($file);

        foreach ($csv as $record) {
            DB::table('program')
            ->insert([

                'id_channel' 	=> $record[0],
                'program' 		=> $record[1],

            ]);
        }
    }
}
