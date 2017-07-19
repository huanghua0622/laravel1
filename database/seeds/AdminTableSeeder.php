<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           [
               'name'=>'admin',
               'password'=>bcrypt('admin')
           ] ,
            [
                'name'=>'libai',
                'password'=>bcrypt('123456')
            ]
        ]);
    }
}
