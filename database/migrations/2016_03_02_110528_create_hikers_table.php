<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikers', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->string('name', 155);
            $blueprint->string('surname',155);
            $blueprint->string('email');
            $blueprint->date('birth_date');
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hikers');
    }
}
