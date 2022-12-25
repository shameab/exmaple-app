<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*    $e = new Comment();
        $e->id = 1;
        $e->user_id = 1;
        $e->post_id = 1;
        $e->comment = "hello, here is my comment";
        $e->save();
        */

        $comments = Comment::factory()->count(5)->create();
    }
}
