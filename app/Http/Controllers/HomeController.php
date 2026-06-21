<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $portfolios = Portfolio::where('is_featured', true)->latest()->take(6)->get();
        $testimonials = Testimonial::where('is_active', true)->latest()->get();

        return view('home', compact('services', 'portfolios', 'testimonials'));
    }
}
