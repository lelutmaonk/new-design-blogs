<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

/* Routes Login Register */

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


/* Routes Blogs */
Route::get('/', function () {
    return view('user_templates.home', [
        'test' => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('user_templates.about', [
        'test' => Category::all()
    ]);
});

Route::get('/blogs', [PostController::class, 'index']);


Route::get('/blogs/{post:slug}', [PostController::class, 'detailPost']);
