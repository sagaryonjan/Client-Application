<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender', ['male', 'female', 'other'])->default('other');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('nationality');
            $table->text('educational_background');
            $table->enum('prefer_contact', ['email', 'phone', 'none'])->default('none');
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
        Schema::dropIfExists('client');
    }
}
