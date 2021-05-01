<?php

use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            [
                'detail'=>'R 5337 PC',
                'name' => 'Mobil Toyota Fortuner Biru'
            ],
            [
                'detail'=>'R 1234 AC',
                'name' => 'Mobil Honda Jazz Merah'
            ],
            [
                'detail'=>'R 1234 AC',
                'name' => 'Mobil Honda Jazz Kuning'
            ],

          


        ];
        foreach ($data as $d){
            DB::table('inventories')->insert([
                'name' => $d['name'],
                'detail' => $d['detail']
            ]);
        }
    }
}
