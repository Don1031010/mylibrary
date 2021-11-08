<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\BookController;
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
Route::get('books/{book:slug}',  [BookController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('books.index', [
        'books' => $category->books
        // 'books' => $category->books->load(['category', 'user'])
    ]);
});
