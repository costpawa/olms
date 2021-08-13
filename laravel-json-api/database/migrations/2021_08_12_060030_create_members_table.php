<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_id', 20)->unique()->nullable(); // kütüphanede kart sistemi yoksa bu alan boş bırakılabilir.
            $table->string('nationality_id', 11)->unique();      // tc kimlik numarası.
            $table->string('name', 30);
            $table->string('surname', 30);
            $table->string('status', 1)->default(1);       // üyenin aktiflik durumunu belirtir.
            $table->string('member_type', 1)->nullable();        // member_type modülü aktif ise üyenin tipini belirtir, değilse boş bırakılır. member_types tablosu ile ilişkilidir.
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->unique();
            $table->string('photo', 100)->unique()->nullable();
            $table->string('description', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('gender', 1)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('country')->unsigned()->nullable();
            $table->tinyInteger('city')->unsigned()->nullable();
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
        Schema::dropIfExists('members');
    }
}
