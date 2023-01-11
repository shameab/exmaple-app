<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        $e = new Post();
        $e->id = 1;
        $e->user_id = 1;
        $e->title = "pancakes";
        $e->imagePath = "https://en.wikipedia.org/wiki/Food#/media/File:Good_Food_Display_-_NCI_Visuals_Online.jpg";
        $e->body = "hello, my name is shamea";
        $e->tags = "indian";
        $e->save();  */

        $posts = Post::factory()->count(5)->create();
    }
}