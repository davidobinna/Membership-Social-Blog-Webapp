<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = collect([
            $this->createTag('Outdoors','outdoors'),
            $this->createTag('Health','health'),
            $this->createTag('Environment','environment'),
            $this->createTag('Fitness','fitness'),
            $this->createTag('Family','family'),
            $this->createTag('Decor','Deco'),
            $this->createTag('beauty','beauty'),
            $this->createTag('Diy','d-i-y'),
        ]);

        Post::all()->each(function($post) use ($tags) {
            $post->syncTags($tags->random(rand(0, $tags->count()))
                ->take(3)
                ->pluck('id')
                ->toArray(),
            );
         });
     }

    private function createTag(string $name, string $slug)
    {
        return Tag::factory()->create(compact('name','slug'));
    }
}
