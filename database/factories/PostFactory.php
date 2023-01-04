<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'          => $this->faker->text(20),
            'slug'           => $this->faker->unique()->slug,
            'body'           => $this->faker->unique()->slug,
            'author_id'      => $attribute['author_id'] ?? User::factory(),
            'cover_image'    => 'stock-one.jpg',
            'published_at'   => now(),
            'type'           => $this->faker->randomElement(['standard','premium']),
            'is_commentable' => rand(0,1)
        ];
    }
}
