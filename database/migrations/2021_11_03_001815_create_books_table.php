<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('discription')->nullable();
            $table->string('author');
            // $table->number('format');
            $table->enum('language', ['Japanese', 'English', 'Chinese']);
            $table->string('cover_image')->nullable();
            $table->string('publication_year', 4)->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
