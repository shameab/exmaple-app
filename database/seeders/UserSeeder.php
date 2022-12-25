<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*    $e = new User();
        $e->id = 1;
        $e->name = "Shamea";
        $e->email = "sboyce85@hotmail.com";
        $e->password = "password";
        $e->save();
        */

        $users = User::factory()->count(5)->create();
    }
}
