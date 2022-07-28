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


/* Routes Dashboard */

Route::get('/dashboard', function () {
    return view('templates.test', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/dashboard/posts', function () {
    return view('templates.test2', [
        'title' => 'Posts Page'
    ]);
});

/* Routes Blogs */

/* Routes Login */

/* Routes Register */