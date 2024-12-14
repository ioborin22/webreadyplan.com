<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-web-ready-form', [MailController::class, 'sendWebReadyPlan']);
