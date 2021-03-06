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
            $table->enum('format', ['audio', 'mobi', 'epub', 'docx', 'azw', 'azw3', 'pdf']);
            $table->float('duration')->nullable(); // used for audiobooks
            $table->string('narrator')->nullable();
            $table->string('filename');
            $table->tinyInteger('num_of_files')->default(1); // multiple files for audiobooks
            $table->float('total_size')->nullable();
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
