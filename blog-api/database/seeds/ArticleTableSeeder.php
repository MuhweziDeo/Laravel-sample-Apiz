<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //drop all tables before
        Article::truncate();

        // fake
        $faker =\Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
        	# code...
        	Article::create([
        		'title'=>$faker->sentence,
        		'body'=>$faker->paragraph,

        	]);
        }

    }
}
