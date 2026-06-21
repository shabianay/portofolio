<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PortfolioFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->words(3, true);
        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'description' => fake()->paragraphs(3, true),
            'category' => fake()->randomElement(['Web App', 'UI/UX Design', 'Branding', 'Mobile App', 'Game']),
            'image' => 'https://picsum.photos/seed/' . Str::random(6) . '/800/600',
            'url' => 'https://' . fake()->domainName(),
            'client' => fake()->company(),
            'completion_date' => fake()->date(),
            'is_featured' => fake()->boolean(30),
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}
