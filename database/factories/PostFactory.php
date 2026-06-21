<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->unique()->sentence(5);
        return [
            'user_id' => 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraphs(8, true),
            'excerpt' => fake()->paragraph(3),
            'featured_image' => 'https://picsum.photos/seed/' . Str::random(6) . '/1200/600',
            'category' => fake()->randomElement(['Design', 'Development', 'Business', 'Lifestyle']),
            'is_published' => true,
            'published_at' => fake()->dateTimeThisYear(),
        ];
    }
}
