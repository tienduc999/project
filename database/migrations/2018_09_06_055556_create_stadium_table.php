<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadiums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manager_name');
            $table->integer('manager_phone');
            $table->integer('manager_email');


            $table->string('name');


            $table->integer('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('website');
            $table->text('province_city')->nullable();
            $table->text('short_note')->nullable();
            $table->string('district')->nullable();
            $table->string('apartment_number')->nullable();
            $table->string('surface')->nullable();
            $table->text('img')->nullable();
            $table->text('about')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->ondelete('cascade');

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
        Schema::dropIfExists('stadium');
    }
}
