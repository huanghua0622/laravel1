<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
          [
              'goods_name'=>'iphone',
              'goods_price'=>7777,
              'created_at'=>date('Y-m-d H:i:s')
          ],
            [
                'goods_name'=>'联想',
                'goods_price'=>1999,
                'created_at'=>date('Y-m-d H:i:s')
            ]
        ]);
    }
}
