<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('surname', 50)->nullable();
            $table->string('genres', 20)->nullable();
            $table->tinyInteger('language')->nullable();
            $table->tinyInteger('nationality')->nullable();
            $table->string('gender', 1)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('description', 1000)->nullable();
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
        Schema::dropIfExists('authors');
    }
}
