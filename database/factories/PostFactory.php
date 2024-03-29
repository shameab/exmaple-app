<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel-Post>
 */
class PostFactory extends Factory
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
            'title' => $this-> faker ->text(50),
            'imagepath' => $this -> faker -> text(),
            'body'=> $this-> faker -> text(),
            'tags'=> $this-> faker -> text(),
        ];
    }
}
