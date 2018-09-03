<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
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
        	$user = new Article;
        	$user -> title = str_random(10);
        	$user -> intro = str_random(10);
        	$user -> images = '';
        	$user -> content = str_random(10);
        	$user -> views = 0;
        	$user -> user_id =0 ;
        	$user -> zan = 0;
        	$user -> cate_id = 0;
        	$user -> save();
        }
    }
}
