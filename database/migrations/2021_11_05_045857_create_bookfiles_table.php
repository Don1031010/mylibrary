<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookfiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id');
            $table->enum('format', ['audiobook', 'mobi', 'epub', 'docx', 'azw', 'azw3', 'pdf']);
            $table->string('filename');
            $table->integer('num_of_files')->default(1);
            $table->integer('total_size')->nullable();
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
        Schema::dropIfExists('bookfiles');
    }
}
