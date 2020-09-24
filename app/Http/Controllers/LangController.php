<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LangController extends Controller
{
	public function submiti() {
		session(['key' => 'ru']);
		App::setLocale('ru');
		return redirect()->route('home');
	}

	public function submitti() {
		session(['key' => 'kz']);
		App::setLocale('kz');
		return redirect()->route('home');
	}

	public function submitf() {
		session(['key' => 'ru']);
		App::setLocale('ru');
		return redirect()->route('about');
	}

	public function submittf() {
		session(['key' => 'kz']);
		App::setLocale('kz');
		return redirect()->route('about');
	}

    
}
