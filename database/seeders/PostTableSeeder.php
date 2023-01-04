<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(5)->create(['author_id' => 1]);
        Post::factory()->count(5)->create(['author_id' => 2]);
    }
}
