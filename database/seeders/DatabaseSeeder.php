<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Blog;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(10)->create();
        $blogs = Blog::all();
        foreach($blogs as $blog) {
            for ($i = 0; $i < 10; $i++) {
                \App\Models\Comment::factory()->create([
                    'blog_id' => $blog->id
                ]);
            }
        }
    }
}
