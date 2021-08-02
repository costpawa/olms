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
            $table->increments('id');
            $table->string('isbn13', 13)->unique();
            $table->string('isbn10', 10)->unique()->nullable();
            $table->string('title', 100);
            $table->string('authors', 20);
            $table->string('categories', 20);
            $table->tinyInteger('type')->unsigned();
            $table->smallInteger('number_of_pages')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->date('release_date');
            $table->string('languages', 20);
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
