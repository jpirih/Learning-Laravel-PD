<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateEventsHikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_hikers', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->integer('event_id');
            $blueprint->integer('hiker_id');
            $blueprint->dateTime('payment_date')->nullable()->default(null);
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
        Schema::drop('events_hikers');
    }
}
