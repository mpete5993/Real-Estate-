<?php

use Illuminate\Support\Facades\Route;
// use App\Admin\UserController;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('welcome');

/* ===== property ===== */
Route::get('/properties', [App\Http\Controllers\PropertiesController::class, 'index'])->name('properties');
Route::get('/properties/{property}', [App\Http\Controllers\PropertiesController::class, 'show'])->name('properties.show');
Route::get('/search', [App\Http\Controllers\PropertiesController::class, 'search'])->name('search');
/* ===== property ===== */

/* ===== Blog ===== */
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [App\Http\Controllers\BlogController::class, 'show'])->name('post.show');
Route::post('/comment/{post_id}', [App\Http\Controllers\CommentsController::class, 'store'])->name('comments.store');
Route::get('/postSearch',  [App\Http\Controllers\BlogController::class, 'search'])->name('post.search');
/* ===== Blog ===== */

/* ===== Agent ===== */
Route::get('/agents', [App\Http\Controllers\AgentsController::class, 'index'])->name('agents');
Route::get('/agent/{agent}', [App\Http\Controllers\AgentsController::class, 'show'])->name('agent.show');
Route::get('/profile', [App\Http\Controllers\AgentsController::class, 'profile'])->name('profile.show');
Route::patch('/profile', [App\Http\Controllers\AgentsController::class, 'updateProfile'])->name('profile.edit');
/* ===== Agent ===== */

/* ===== contact us ===== */
Route::get('/contact', function () {
    return view('contact');
});
/* ===== contact us ===== */

/* ############ admin  ##############*/
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){

   
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', 'UserController' , ['except' => ['show', 'create', 'store']]);
    Route::resource('categories', 'CategoryController' , ['except' => ['show']]);
    Route::resource('tags', 'TagController' , ['except' => ['show']]);
    Route::resource('posts', 'PostController' , ['except' => ['show']]);
    Route::resource('properties', 'PropertyController' , ['except' => ['show']]);

});
/* ############ admin ##############*/
