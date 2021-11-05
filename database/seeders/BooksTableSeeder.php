<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'title' => '康熙大传',
            'slug' => '康熙大传',
            // 'slug' => Str::of('康熙大传')->slug('-', 'zh-CN'),
            'author' => '白新良',
            'publisher' => '人民文学出版社',
            'language' => 'Chinese',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        
        DB::table('books')->insert([
            'title' => '世界の教養365',
            'slug' => '世界の教養365',
            'author' => '白新良',
            'publisher' => '人民文学出版社',
            'language' => 'Chinese',
            'user_id' => 2,
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'Peking Picknic',
            'slug' => Str::of('Peking Picknic')->slug(),
            'author' => 'Ann Bridge',
            'publisher' => 'Daunt Books',
            'language' => 'English',
            'user_id' => 2,
            'category_id' => 2
        ]);
        DB::table('books')->insert([
            'title' => 'The last and the first',
            'slug' => Str::of('The last and the first')->slug(),
            'author' => 'Nina Berberova',
            'publisher' => 'Pushkin Press',
            'language' => 'English',
            'user_id' => 3,
            'category_id' => 3
        ]);
        DB::table('books')->insert([
            'title' => '思考の教室',
            'slug' => '思考の教室',
            'author' => '戸田山和久',
            'publisher' => 'NHK出版',
            'language' => 'Japanese',
            'user_id' => 3,
            'category_id' => 3
        ]);
        DB::table('books')->insert([
            'title' => '死からの生還',
            'slug' => '死からの生還',
            'author' => '中村うさぎ',
            'publisher' => '文藝春秋',
            'language' => 'Japanese',
            'user_id' => 3,
            'category_id' => 2
        ]);
        DB::table('books')->insert([
            'title' => '大東京23区散歩',
            'slug' => '大東京23区散歩',
            'author' => '泉麻人',
            'publisher' => '講談社',
            'language' => 'Japanese',
            'user_id' => 2,
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'さおだけ屋はなぜ潰れないのか',
            'slug' => 'さおだけ屋はなぜ潰れないのか',
            'author' => '山田真哉',
            'publisher' => '光文社新書',
            'language' => 'Japanese',
            'user_id' => 2,
            'category_id' => 1
        ]);
    }
}
