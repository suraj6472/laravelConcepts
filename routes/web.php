<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// use Inertia\Inertia; // way 2

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
//    return inertia('Welcome'); way 1

//    return Inertia::render('Welcome'); // way 2


    return Inertia::render('Home', [
        'name' => "Suraj",
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);



});
