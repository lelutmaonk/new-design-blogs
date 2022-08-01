<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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
    return view('templates.dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

/* Routes Login Register */

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);




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
