<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LangController;
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
	if(session('key') == 'kz'){
		App::setLocale('kz');
		return view('index');
	}
	else{
		App::setLocale('ru');
    	return view('index');
	}
})->name('home');


Route::get('/about-me', function () {
    if(session('key') == 'kz'){
		App::setLocale('kz');
		return view('folio');
	}
	else{
		App::setLocale('ru');
    	return view('folio');
	}
})->name('about');

Route::get('/langru', [LangController::class, 'submiti']);
Route::get('/langkz', [LangController::class, 'submitti']);

Route::get('/langruf', [LangController::class, 'submitf']);
Route::get('/langkzf', [LangController::class, 'submittf']);

Route::post('/email', [MailController::class, 'submit']);

