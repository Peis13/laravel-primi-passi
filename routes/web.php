<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy-policy');

Route::get('/faq', function () {

  $faqs_prima_del_corso = config('faqs.prima_del_corso');
  $faqs_dopo_il_corso = config('faqs.dopo_il_corso');

    return view('faq', [
      'faqs_prima_del_corso' => $faqs_prima_del_corso,
      'faqs_dopo_il_corso' => $faqs_dopo_il_corso
    ]);
})->name('faq');
