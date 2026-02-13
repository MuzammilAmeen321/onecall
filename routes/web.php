<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
Route::get('/ac-ventilation', function () {
    return view('pages.services.ac-ventilation');
})->name('services.ac-ventilation');
Route::get('/aluminum-glass-work', function () {
    return view('pages.services.aluminum-glass');
})->name('services.aluminum-glass-work');
Route::get('/cctv-cameras', function () {
    return view('pages.services.camera');
})->name('services.cctv-cameras');
Route::get('/electric-work-in-dubai', function () {
    return view('pages.services.electrical');
})->name('services.electric-work-in-dubai');
Route::get('/gypsum-partition-ceiling-work-in-dubai', function () {
    return view('pages.services.partition-ceiling');
})->name('services.gypsum-partition-ceiling-work-in-dubai');
Route::get('/painting', function () {
    return view('pages.services.painting');
})->name('services.painting');
Route::get('/plumber-work-in-dubai', function () {
    return view('pages.services.plumber');
})->name('services.plumber-work-in-dubai');
Route::get('/tesla-charging', function () {
    return view('pages.services.tesla-charging');
})->name('services.tesla-charging');
Route::get('/tiling-in-dubai', function () {
    return view('pages.services.tiling');
})->name('services.tiling-in-dubai');

Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/sitemap', 'pages.sitemap')->name('sitemap.page');

Route::get('/robots.txt', function () {
    return response()
        ->view('seo.robots')
        ->header('Content-Type', 'text/plain; charset=UTF-8');
})->name('robots');

Route::get('/sitemap.xml', function () {
    return response()
        ->view('seo.sitemap')
        ->header('Content-Type', 'application/xml; charset=UTF-8');
})->name('sitemap');