<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    //
    public function index()
    {
        // ** below shows how to do database logging. We use clockwork devtool instead. **
        // \Illuminate\Support\Facades\DB::listen(function($query) {
        //     logger($query->sql, $query->bindings);
        // });

        return view('books.index')
            ->with('books', Book::latest()->get());

        // ** N+1 problem and the solution. We added $with property in Model for eager loading relationships **
        // return view('books', [
        //    'books' => Book::all() 
        // ]); // this introduces the n+1 problem!
        //
        // the solution is to enable eager loading using with.
        // return view('books', ['books' => Book::latest()->with('category', 'user')->get() ]);
    }

    public function show(Book $book) {
        return view('books.show', ['book' => $book]);
    }

    /* edit an existing entry */
    public function edit(Book $book) {
        return view('books.edit', ['book' => $book])->with('categories', Category::get());
    }

    public function update(Request $request, Book $book) {
        // user input validation
        @dd($book);
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher' => 'max:255',
            'cover_image' => 'max:250|mimes:jpg,jpeg,png,gif'
        ]);
        
        // validate and store uploaded file.
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            $path = $request->cover_image->store('cover', 'public');
        } else {
            $path = null;
        }

        // create new book entry
        $fields = $request->only('title', 'author', 'publisher', 'language', 'category_id');
        $fields['slug'] = mb_eregi_replace('[ 　&!#]', '-', $request->input('title'));
        $fields['cover_image'] = $path;
        
        $book->update( $fields);
        return redirect('/');
    }

    /* create a new entry */
    public function create() {
        return view('books.create')->with('categories', Category::get());
    }

    public function store(Request $request) {
        // user input validation
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher' => 'max:255',
            'cover_image' => 'max:250|mimes:jpg,jpeg,png,gif'
        ]);
        
        // validate and store uploaded file.
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            $path = $request->cover_image->store('cover', 'public');
        }

        // create new book entry
        $fields = $request->only('title', 'author', 'publisher', 'language', 'category_id');
        $fields['user_id'] = 2;
        $fields['slug'] = mb_eregi_replace('[ 　&!#]', '-', $request->input('title'));
        $fields['cover_image'] = $path;
        
        Book::create( $fields);
        return redirect('/');
    }


}
