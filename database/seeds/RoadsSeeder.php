<?php

use Illuminate\Database\Seeder;

class RoadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \Illuminate\Support\Facades\DB::table('roads')->truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $converter = new \App\Services\FileConverterService();
        $file = 'imports/data.csv';

        $fileArray = $converter->csvToArray($file);
        foreach ($fileArray as $key => $data) {
            $road = new \App\Road();
            $road->name = $data['Nama'];
            $road->speed = $data['kecepatan'];
            $road->activity = $data['aktifitas'];
            $road->lane = $data['lajur'];
            $road->first_latitude = $data['latitude_awal'];
            $road->first_longitude = $data['longitude_awal'];
            $road->second_latitude = $data['latitude_akhir'];
            $road->second_longitude = $data['longitude_akhir'];
            $road->long = $data['panjang'];
            $road->width = $data['lebar'];
            $road->time = $data['waktu'];
            $road->type = $data['tipe'];

            $road->save();
        }
    }
}
