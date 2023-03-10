<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Profile;

class AuthorPostProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = Author::factory()->count(5)->create();
    
        foreach ($authors as $author) {
            // create posts
            Post::factory()->count(2)->create(['author_id' => $author->id]);
            
            // create personal profile
            Profile::factory()->count(1)->create(['author_id' => $author->id]);
        }
    }
}