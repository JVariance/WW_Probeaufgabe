<?php

use App\Mail\ContactFormSent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
	return Inertia::render('Welcome', [
		'teamMembers' => DB::select('select * from teammembers'),
	]);
})->name('/');

Route::get('/ueber-uns', function () {
	return Inertia::render('UeberUns', [
		'teamMembers' => DB::select('select * from teammembers'),
	]);
})->name('/ueber-uns');

Route::get('/kontakt', function () {
	return Inertia::render('Kontakt', []);
})->name('/kontakt');

Route::post('/kontakt/formular', function (Request $request) {
	$validated = $request->validate([
		'vorname' => 'required',
		'nachname' => 'required',
		'email' => 'required|email',
		'einwilligung' => 'required|accepted',
		'telefon' => 'nullable',
	], [
		'vorname.required' => 'Bitte geben Sie Ihren Vornamen an.',
		'nachname.required' => 'Bitte geben Sie Ihren Nachnamen an.',
		'email.required' => 'Bitte geben Sie Ihre E-Mail-Adresse an.',
		'einwilligung.accepted' => 'Bitte akzeptieren Sie die Datenschutzbestimmungen.',
	]);
	Mail::send(new ContactFormSent());

	return Inertia('Kontakt', ['success' => true]);
})->name('/kontakt/formular');
