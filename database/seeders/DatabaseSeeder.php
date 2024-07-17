<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        foreach (User::all() as $key => $user) {
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->username = explode(" ", $user->name)[0];
            $profile->save();
        }

        
    }
}
