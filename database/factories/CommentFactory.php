<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel-Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'comment'=> $this-> faker -> text()
            
        ];
    }
}
