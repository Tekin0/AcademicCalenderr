<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pattern')->insert([
            ['pattern'=>'16,-16,10,0,-10,7,11,-18,21,-7,7,4,7,0,5,12,69,-1,0,2,11,6,4,9,5,1','category_id'=>'1','period_id'=>'1'],
//            ['pattern' => '', 'cateygory_id'=>'2','period_id'=>'1'],
//            ['pattern' => '', 'cateygory_id'=>'2','period_id'=>'2'],
//            ['pattern' => '', 'cateygory_id'=>'3','period_id'=>'1'],
//            ['pattern' => '', 'cateygory_id'=>'3','period_id'=>'2'],
            ['pattern'=>'-7,-7,7,14,2,2,24,72,-5,10,0,6,4,3,1,2,5,9,2,10','category_id'=>'1','period_id'=>'2'],
            ['pattern'=>'14,9,8,4,0,53,1,5','category_id'=>'4','period_id'=>'1'],
            ['pattern'=>'7,2,5,3,4,11,0,17,69,0,1,17,4,9,-5,0','category_id'=>'5','period_id'=>'1'],
            ['pattern'=>'0,0,14,-16,11,16,0,17,65,4,8,16,5,9,14,44','category_id'=>'5','period_id'=>'2'],
            ['pattern'=>'11,80,14,14,4,7,3,7,2,-9,14','category_id'=>'6','period_id'=>'1'],
            ['pattern'=>'11,17,14,8,2,1,3,2,1,-3,7','category_id'=>'6','period_id'=>'2'],
            ['pattern'=>'11,42,31,21,14,3,1,7,3,7,2,-9,14','category_id'=>'7','period_id'=>'1'],
            ['pattern'=>'11,14,17,14,8,2,1,3,2,1,-3,7','category_id'=>'7','period_id'=>'2'],
            ['pattern'=>'25,16,7,5,0,7','category_id'=>'8','period_id'=>'1'],
            ['pattern'=>'11,17,14,8,2,1,3,2,1,-3,7','category_id'=>'8','period_id'=>'2'],
            ['pattern'=>'11,73,21,14,4,7,3,7,2,-9,14','category_id'=>'9','period_id'=>'1'],
            ['pattern'=>'11,24,7,9,1,1,3,2,1,-3,7','category_id'=>'9','period_id'=>'2'],
            ['pattern'=>'7,28,7,21,0,7','category_id'=>'10','period_id'=>'1'],
            ['pattern'=>'15,2,14,0,7','category_id'=>'10','period_id'=>'2'],
            ['pattern'=>'21,9,5,9','category_id'=>'11','period_id'=>'1'],
            ['pattern'=>'21,9,5,9','category_id'=>'11','period_id'=>'2'],
        ]);
    }
}
