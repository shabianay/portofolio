<?php

namespace App\Console\Commands;

use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Post;
use Illuminate\Console\Command;

class CleanData extends Command
{
    protected $signature = 'data:clean';
    protected $description = 'Clean portfolio descriptions and fix data';

    public function handle()
    {
        Portfolio::chunk(20, function ($portfolios) {
            foreach ($portfolios as $p) {
                if ($p->description) {
                    $cleaned = trim(strip_tags($p->description));
                    $cleaned = preg_replace('/\s+/', ' ', $cleaned);
                    $p->description = $cleaned;
                    $p->save();
                }
            }
        });
        $this->info('Portfolio descriptions cleaned.');
    }
}
