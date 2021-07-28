<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('card_id')->unique()->unsigned();
            $table->string('tcno', 11)->unique();
            $table->string('name', 30);
            $table->string('surname', 30);
            $table->string('phone', 14)->unique()->nullable();
            $table->string('email', 50)->unique();
            $table->timestamp('birthdate')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('picture', 50)->unique()->nullable();
            $table->tinyInteger('year')->unsigned()->nullable();
            $table->tinyInteger('branch')->unsigned()->nullable();
            $table->tinyInteger('course')->unsigned()->nullable();
            $table->string('number', 8)->unique();
            $table->tinyInteger('city_id')->unsigned()->nullable();
            $table->tinyInteger('district_id')->unsigned()->nullable();
            $table->tinyInteger('neighborhood_id')->unsigned()->nullable();
            $table->string('street', 50)->nullable();
            $table->string('building_number', 3)->nullable();
            $table->string('sms_number', 14)->nullable();
            $table->string('mother_number', 14)->nullable();
            $table->string('father_number', 14)->nullable();
            $table->string('sibling_number', 14)->nullable();
            $table->string('other_number', 14)->nullable();
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
        Schema::dropIfExists('students');
    }
}
