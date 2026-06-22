<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('is_featured', true)->latest()->take(6)->get();

        return view('home', compact('portfolios'));
    }
}
