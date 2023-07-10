<?php

use App\Http\Controllers\BlogController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home.redirect');

Route::get('/test', TestController::class)->name('test')->middleware('token');


Route::middleware('guest')->group(function () {
// register
    Route::get('register',[RegisterController::class,'index'])->name('register');
    Route::post('register',[RegisterController::class,'store'])->name('register.store');

// login
    Route::get('login',[LoginController::class,'index'])->name('login')->withoutMiddleware('guest');
    Route::post('login',[LoginController::class,'store'])->name('login.store');
});


Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('blog/{post}',[BlogController::class,'show'])->name('blog.show');
Route::post('blog/{post}/like',[BlogController::class,'like'])->name('blog.like');


// user  grouping (adding prefix before routes)

/* we can also add extends and only: ->only([
    'index', 'show',
])
! if we are do this we can use only to index and show routes
*/

// Route::get('/products', [ProductsController::class, 'index'])->name('products');
// Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');




// должен быть всегда в самом низу
Route::fallback(function() {
    return 'Fallback';
}); 