<?php

namespace App\Http\Controllers;

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

    public function create() {
        return view('books.create')->with('categories', Category::get());
    }

    public function store(Request $request) {
        // @dd($request->file('cover_image'));
        // @dd($request->input('cover_image')); // returns null. need to use $request->file().
     
        // upload file validation.
        // if ($request->hasFile('profile_picture') &&
        //     $request->file('profile_picture')->isValid()) {
        //     //
        // }

        // $request->validate([
        //     'upload_file' => 'required|max:1024|mimes:jpg,jpeg,png,gif'
        // ]);

        // php.ini:
        // post_max_size = 20M
        // upload_max_filesize = 20M


        // $fields = $request->only('title', 'author', 'publisher', 'language', 'category_id', 'cover_image');
        // $fields['user_id'] = 2;
        // $fields['slug'] = $request->input('title');
        
        // Book::create( $fields);
        // return redirect('/');

        $path = $request->cover_image->store('cover');
        @dd($path);
     }


}
