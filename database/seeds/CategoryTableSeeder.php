<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = Category::create([
           'name'=>'编程',
        ]);
        $study = Category::create([
            'name'=>'自学',
    ]);
        DB::table('article_category')->insert([
           [
               'article_id'=>3,
               'category_id'=>$program->id
           ],
            [
                'article_id'=>4,
                'category_id'=>$study->id
            ],
            [
                'article_id'=>4,
                'category_id'=>$study->id
            ]
        ]);
    }
}
