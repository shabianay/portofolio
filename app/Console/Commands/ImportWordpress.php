<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImportWordpress extends Command
{
    protected $signature = 'import:wordpress';
    protected $description = 'Import data from shabianporto WordPress DB into Laravel';

    public function handle()
    {
        // Query WordPress tables using explicit db prefix
        $prefix = 'shabianporto.wp_';

        // 1. Import portfolios
        $portfolios = DB::select("SELECT * FROM {$prefix}posts WHERE post_type = ? AND post_status = ?", ['dtr_portfolio', 'publish']);
        foreach ($portfolios as $p) {
            $meta = DB::select("SELECT meta_key, meta_value FROM {$prefix}postmeta WHERE post_id = ?", [$p->ID]);
            $meta = collect($meta)->pluck('meta_value', 'meta_key')->toArray();

            $image = null;
            if (!empty($meta['_thumbnail_id'])) {
                $img = DB::select("SELECT guid FROM {$prefix}posts WHERE ID = ?", [$meta['_thumbnail_id']]);
                $image = $img[0]->guid ?? null;
            }

            Portfolio::updateOrCreate(
                ['slug' => Str::slug($p->post_name)],
                [
                    'title' => $p->post_title,
                    'slug' => Str::slug($p->post_name),
                    'description' => $p->post_content,
                    'category' => $meta['dtr_portfolio_category'] ?? null,
                    'image' => $image,
                    'url' => $meta['dtr_portfolio_url'] ?? null,
                    'client' => $meta['dtr_portfolio_client'] ?? null,
                    'completion_date' => $meta['dtr_portfolio_date'] ?? null,
                ]
            );
        }
        $this->info('Portfolios imported: ' . count($portfolios));

        // 2. Import testimonials
        $testimonials = DB::select("SELECT * FROM {$prefix}posts WHERE post_type = ? AND post_status = ?", ['dtr_testimonial', 'publish']);
        foreach ($testimonials as $t) {
            $meta = DB::select("SELECT meta_key, meta_value FROM {$prefix}postmeta WHERE post_id = ?", [$t->ID]);
            $meta = collect($meta)->pluck('meta_value', 'meta_key')->toArray();

            $avatar = null;
            if (!empty($meta['_thumbnail_id'])) {
                $img = DB::select("SELECT guid FROM {$prefix}posts WHERE ID = ?", [$meta['_thumbnail_id']]);
                $avatar = $img[0]->guid ?? null;
            }

            Testimonial::updateOrCreate(
                ['name' => $t->post_title],
                [
                    'content' => $t->post_content,
                    'position' => $meta['dtr_testimonial_position'] ?? null,
                    'company' => $meta['dtr_testimonial_company'] ?? null,
                    'rating' => $meta['dtr_testimonial_rating'] ?? 5,
                    'avatar' => $avatar,
                    'is_active' => true,
                ]
            );
        }
        $this->info('Testimonials imported: ' . count($testimonials));

        // 3. Import services (static pages)
        $services = DB::select("SELECT * FROM {$prefix}posts WHERE post_type = ? AND post_name IN (?,?,?,?,?,?) AND post_status = ?",
            ['page', 'services', 'visual-design', 'digital-branding', 'art-direction', 'ux-research', 'e-commerce', 'publish']);

        $serviceTitles = [
            'services' => 'Web Development',
            'visual-design' => 'Visual Design',
            'digital-branding' => 'Digital Branding',
            'art-direction' => 'Art Direction',
            'ux-research' => 'UX Research',
            'e-commerce' => 'E-Commerce',
        ];

        foreach ($services as $s) {
            Service::updateOrCreate(
                ['slug' => $s->post_name],
                [
                    'title' => $s->post_title,
                    'slug' => $s->post_name,
                    'description' => strip_tags($s->post_excerpt ?: $s->post_content),
                    'body' => $s->post_content,
                    'icon' => match($s->post_name) {
                        'services' => 'code',
                        'visual-design' => 'palette',
                        'digital-branding' => 'briefcase',
                        'art-direction' => 'camera',
                        'ux-research' => 'search',
                        'e-commerce' => 'cart',
                        default => 'star',
                    },
                    'is_active' => true,
                ]
            );
        }
        $this->info('Services imported: ' . count($services));

        // 4. Import blog posts
        $posts = DB::select("SELECT * FROM {$prefix}posts WHERE post_type = ? AND post_status = ?", ['post', 'publish']);
        foreach ($posts as $post) {
            $meta = DB::select("SELECT meta_key, meta_value FROM {$prefix}postmeta WHERE post_id = ?", [$post->ID]);
            $meta = collect($meta)->pluck('meta_value', 'meta_key')->toArray();
            $image = null;
            if (!empty($meta['_thumbnail_id'])) {
                $img = DB::select("SELECT guid FROM {$prefix}posts WHERE ID = ?", [$meta['_thumbnail_id']]);
                $image = $img[0]->guid ?? null;
            }

            Post::updateOrCreate(
                ['slug' => Str::slug($post->post_name)],
                [
                    'user_id' => 1,
                    'title' => $post->post_title,
                    'slug' => Str::slug($post->post_name),
                    'body' => $post->post_content,
                    'excerpt' => $post->post_excerpt,
                    'featured_image' => $image,
                    'category' => $meta['category'] ?? 'Uncategorized',
                    'is_published' => true,
                    'published_at' => $post->post_date,
                ]
            );
        }
        $this->info('Blog posts imported: ' . count($posts));

        // 5. Copy images from WordPress uploads to Laravel storage
        $this->info('Import completed!');
    }
}
