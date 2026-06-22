<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\CertificateController as AdminCertificateController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');
Route::get('/certificate', [PageController::class, 'certificate'])->name('certificate');


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolios');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolios.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('portfolios', AdminPortfolioController::class)->except('show');
        Route::resource('certificates', AdminCertificateController::class)->except('show');
    });
});

Route::get('/robots.txt', function () {
    return response()->view('robots')->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    $portfolios = Portfolio::all();
    return response()->view('sitemap', compact('portfolios'))->header('Content-Type', 'application/xml');
});

require __DIR__.'/auth.php';
