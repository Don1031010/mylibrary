<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Category;

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
    // \Illuminate\Support\Facades\DB::listen(function($query) {
    //     logger($query->sql, $query->bindings);
    // });

    // return view('books', ['books' => Book::all() ]); // this introduces the n+1 problem!
    return view('books', [
        'books' => Book::latest()->get() 
    ]);
    // return view('books', ['books' => Book::latest()->with('category', 'user')->get() ]);
});

Route::get('books/{book:slug}', function (Book $book) {
    return view('book', [
        'book' => $book
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('books', [
        'books' => $category->books
        // 'books' => $category->books->load(['category', 'user'])
    ]);
});
