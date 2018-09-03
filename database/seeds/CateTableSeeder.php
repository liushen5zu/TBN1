<?php

use App\Cate;
use Illuminate\Database\Seeder;

class CateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         for($i=0;$i<20;$i++){
        	$cate = new Cate;
        	$cate -> name = str_random(10);
        	$cate -> save();
        }
    }
}
