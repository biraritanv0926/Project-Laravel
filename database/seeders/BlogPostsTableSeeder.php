<?php

use Illuminate\Database\Seeder;
use Database\Factories\BlogPostFactory;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogCount = (int)$this->command->ask('How many blog posts would you like?', 50);
        $users = App\User::all();
        
        factory(BlogPost::class, $blogCount)->make()->each(function($post) use ($users) {
            $post->user_id = $users->random()->id;
            $post->save();
        });
    }
}