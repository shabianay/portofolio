<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        $titles = ['Web Development', 'UI/UX Design', 'Brand Identity', 'Mobile Development', 'Digital Marketing', 'Consulting'];
        $title = fake()->unique()->randomElement($titles);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->sentence(12),
            'body' => fake()->paragraphs(5, true),
            'icon' => fake()->randomElement(['code', 'palette', 'briefcase', 'smartphone', 'megaphone', 'users']),
            'is_active' => true,
            'sort_order' => fake()->numberBetween(0, 10),
        ];
    }
}
