<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(5)->create();
        User::factory(10)->create();
        Blog::factory(20)->create();
        Comment::factory(100)->create();

        $this->call([
            UserSeeder::class,
        ]);
    }
}
