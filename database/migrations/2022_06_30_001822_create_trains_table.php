<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
public function up()
{
    Schema::create('trains', function (Blueprint $table) {
        $table->id();
        $table->string('company', 30);
        $table->string('departure_station', 20);
        $table->string('arrival_station', 20);
        $table->time('arrival_time', 2);
        $table->time('departure_time', 2);
        $table->string('train_code', 10);
        $table->unsignedSmallInteger('wagon_number');
        $table->boolean('on_time')->default(0);
        $table->boolean('delete')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
