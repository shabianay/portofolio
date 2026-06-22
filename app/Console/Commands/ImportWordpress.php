<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImportWordpress extends Command
{
    protected $signature = 'import:wordpress';
    protected $description = 'Import data from WordPress into Laravel';

    public function handle()
    {
        $prefix = 'shabianporto.wp_';

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
                    'image' => $image,
                    'url' => $meta['dtr_portfolio_url'] ?? null,
                    'client' => $meta['dtr_portfolio_client'] ?? null,
                    'completion_date' => $meta['dtr_portfolio_date'] ?? null,
                ]
            );
        }
        $this->info('Portfolios imported: ' . count($portfolios));
    }
}
