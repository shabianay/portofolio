<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'shabianarsyl@gmail.com'],
            ['name' => 'Shabian Arsyl Yonanta', 'password' => bcrypt('password')]
        );

        Portfolio::factory(24)->create();
        Testimonial::factory(6)->create();
        Service::factory(6)->create();
        Post::factory(8)->create();
    }
}
