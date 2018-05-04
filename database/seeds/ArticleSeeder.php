<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        //insert
        for ($i = 0; $i < 100; $i++) {
            $article = new Article;
            $article->title = "title$i";
            $article->text = $faker->address;
            $article->user_id = rand(1, 70);
            $article->save();
        }
    }
}
