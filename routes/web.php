<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterController;
use App\Models\Email_subject;
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

    $subject = Email_subject::all();

    return view('welcome', compact('subject'));
});

Route::post('/mail', [MailController::class, 'store']);

Route::resource('newsletter', NewsletterController::class);