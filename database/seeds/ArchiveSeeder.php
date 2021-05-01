<?php

use Illuminate\Database\Seeder;

class ArchiveSeeder extends Seeder
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
                'name' => 'BPKB & STNK',
                'detail'=>'R 5337 PC',
                'inventory_id' => '1'
            ],
            [
                'name' => 'BPKB & STNK',
                'detail'=>'R 1234 AC',
                'inventory_id' => '2'
            ],
            [
                'name' => 'BPKB & STNK',
                'detail'=>'R 1234 AC',
                'inventory_id' => '3'
            ],


        ];
        foreach ($data as $d){
            DB::table('inventories')->insert([
                'name' => $d['name'],
                'detail' => $d['detail']
            ]);
        };
    }
    
}
