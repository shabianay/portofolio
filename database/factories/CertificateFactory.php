<?php

namespace Database\Factories;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificateFactory extends Factory
{
    protected $model = Certificate::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'provider' => $this->faker->company,
            'image' => 'path/to/image.jpg',
            'url' => $this->faker->url,
            'type' => $this->faker->randomElement(['image', 'url']),
            'sort_order' => $this->faker->numberBetween(0, 10),
        ];
    }
}
