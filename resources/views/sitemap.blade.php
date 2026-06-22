<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/about') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/portfolio') }}</loc>
        <priority>0.9</priority>
    </url>
    @foreach($portfolios as $portfolio)
    <url>
        <loc>{{ route('portfolios.show', $portfolio->slug) }}</loc>
        <lastmod>{{ $portfolio->updated_at->toW3cString() }}</lastmod>
        <priority>0.7</priority>
    </url>
    @endforeach
    <url>
        <loc>{{ url('/certificate') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <priority>0.6</priority>
    </url>
</urlset>
