<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
           'Business & Finance',
           'Classic Literature',
           'Kids & Teens',
           'Science Fiction',
           'History',
           'Self-Improvement',
           'Travel & Outdoor',
        ];
        //
 
        foreach($categories as $cat) {
            DB::table('categories')->insert([
                'name' => $cat,
                'slug' => Str::of($cat)->slug()
            ]);
        }
    }
}
