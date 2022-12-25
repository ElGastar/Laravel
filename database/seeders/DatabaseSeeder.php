<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Category::factory(5)->create();
        $tags = \App\Models\Tag::factory(5)->create();
        $posts = \App\Models\Post::factory(6)->create();
        foreach($posts as $post){
            $tagId=$tags->random(5)->pluck('id');
           $post->tags()->attach($tagId);
        }

    }
}
