<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $post = Post::all();

        $post->each(function($post) use ($users) {
             Comment::factory()
             ->count(5)
             ->state(new Sequence(
                fn () => [
                     'author_id'       => $users->random()->id,
                     'commentable_id'  => $post->id,
                ],
             ))
             ->create();
        });
    }
}
