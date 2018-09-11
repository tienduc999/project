<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('access_address')->nullable();
            $table->string('team_name');
            $table->string('place')->nullable();
            $table->string('level')->nullable();
            $table->text('logo')->nullable();

            $table->text('team_photo')->nullable();
            $table->integer('age_from')->nullable();
            $table->integer('to_age')->nullable();
            $table->text('about')->nullable();
            $table->text('list_team')->nullable();
            $table->integer('user_id')->unsigned();






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
        Schema::dropIfExists('teams');
    }
}
