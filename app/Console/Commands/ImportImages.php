<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;

class ImportImages extends Command
{
    protected $signature = 'import:images';
    protected $description = 'Download portfolio images from the WordPress site into local storage/app/public/portfolio';

    public function handle()
    {
        $dest = storage_path('app/public/portfolio');
        if (!is_dir($dest)) {
            mkdir($dest, 0755, true);
        }

        $sourceBase = 'C:\xampp\htdocs\shabianporto\wp-content\uploads';

        $portfolios = Portfolio::whereNotNull('image')->get();
        foreach ($portfolios as $p) {
            $url = $p->image;
            $pathComponents = parse_url($url, PHP_URL_PATH);
            // Extract relative path after /wp-content/uploads/
            $relPath = ltrim(substr($pathComponents, strpos($pathComponents, '/wp-content/uploads/') + 20), '/');
            $sourceFile = $sourceBase . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relPath);

            $filename = basename($pathComponents);
            $destFile = $dest . DIRECTORY_SEPARATOR . $filename;

            if (file_exists($sourceFile) && !file_exists($destFile)) {
                copy($sourceFile, $destFile);
                $p->image = 'storage/portfolio/' . $filename;
                $p->save();
                $this->info('Copied: ' . $filename);
            } elseif (!file_exists($sourceFile)) {
                $this->warn('Local source not found: ' . $sourceFile);
            }
        }
        $this->info('All images processed.');
    }
}
