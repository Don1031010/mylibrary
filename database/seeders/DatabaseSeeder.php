<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Book::truncate();
        Category::truncate();

        \App\Models\User::factory(3)->create();

        $this->call(BooksTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
