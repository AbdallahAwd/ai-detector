<?php

use App\Http\Controllers\DetectController;
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
    return view('app.home');
})->name('home');
Route::get('/features', function () {
    return view('app.feature', ['features' => [
        ['title' => 'Advanced Content Detection', 'desc' => 'Implement sophisticated AI algorithms to detect not only text but also images, videos, and audio content that might be generated using AI.'],
        ['title' => 'Educational Resources', 'desc' => 'Include educational resources and documentation to help users understand AI-generated content and its potential implications.'],

    ],
    ]);
})->name('feature');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('app.faq');
})->name('faq');

Route::get('/faq', function () {
    return view('app.faq');
})->name('faq');

// Route::post('/detect', [DetectController::class, 'makeHttpRequest'])->name('detect');
Route::get('/result', [DetectController::class, 'detect'])->name('result');
