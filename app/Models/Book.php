<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'publisher']; // only fields in the array can be mass assigned.
    // protected $guarded = ['id']; // all can be mass assigned except id.

    protected $with = ['category', 'user']; // make it eager loading not lazy loading. solves the n+1 problem

    public function category() { // assumes category_id so function name needs to match the model name!
        return $this->belongsTo(Category::class);
    }

    public function user() { 
        return $this->belongsTo(User::class, 'user_id'); // specify foriegn key explicitly
    }
}
