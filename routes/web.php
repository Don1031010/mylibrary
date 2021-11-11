<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [BookController::class, 'index']);
// Route::get('/', 'App\Http\Controllers\BookController@index'); // this also works
Route::post('books', [BookController::class, 'store']);
Route::get('books/create', [BookController::class, 'create']);
Route::put('books/{book:slug}',  [BookController::class, 'update'])->name('books.update');
Route::get('books/{book:slug}',  [BookController::class, 'show']);
Route::get('books/{book:slug}/edit',  [BookController::class, 'edit'])->name('books.edit');

Route::get('categories/{category:slug}', function (Category $category) {
    return view('books.index', [
        'books' => $category->books
        // 'books' => $category->books->load(['category', 'user'])
    ]);
});

// user registration
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


// play with tailwindcss
Route::get('tailwind', function(){
    return view('tailwind');
});

