<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
           ['name'=>'Finance'],
           ['name'=>'IT Engenering'],
           ['name'=>'Administration'],
           ['name'=>'Operation'],
           
        ];

        foreach($data as $d){
        DB::table('departments')->insert([
            'name' => $d['name']
        ]);
        }


    }
}
