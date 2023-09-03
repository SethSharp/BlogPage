<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use \App\Models\Blog;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $first = User::factory()->create([
            'name' => 'James',
            'role' => 'admin',
            'email' => 'james@blog.test',
            'password' => Hash::make('123456')
        ]);
        Blog::factory(4)->create([
            'user_id' => $first->id
        ]);
        $second = User::factory()->create([
            'name' => 'Glyb',
            'role' => 'admin',
            'email' => 'glyb@blog.test',
            'password' => Hash::make('123456')
        ]);
        Blog::factory(4)->create([
            'user_id' => $second->id
        ]);
        $blogs = Blog::all();
        foreach($blogs as $blog) {
            $x = rand(1,4);
            for ($i = 0; $i < $x; $i++) {
                Comment::factory()->create([
                    'blog_id' => $blog->id,
                    'user_id' => $second->id,
                ]);
            }
        }
    }
}
