<?php

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Seeders\Users;
use Illuminate\Database\Factories\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersCount = max((int)$this->command->ask('How many users would you like?', 20), 1);
        factory(User::class)->states('john-doe')->create();
        factory(User::class, $usersCount)->create();

        // App\Models\User::factory()->count(10)->create();
    }
}