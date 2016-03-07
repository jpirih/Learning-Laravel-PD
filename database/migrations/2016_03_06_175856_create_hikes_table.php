<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateHikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikes', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->string('name');
            $blueprint->integer('altitude');
            $blueprint->integer('difficulty_id');
            $blueprint->date('open_form');
            $blueprint->date('open_to');
            $blueprint->text('description');
            $blueprint->text('img_url');
            $blueprint->integer('guide_id');

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
        Schema::drop('hikes');
    }
}
