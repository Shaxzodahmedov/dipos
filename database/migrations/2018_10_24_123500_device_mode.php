<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeviceMode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_mode', function (Blueprint $table) {
            $table->increments('dm_id');
            $table->integer('dev_id');
            $table->tinyInteger('mode')->length(1);
            $table->tinyInteger('cur_mode')->length(1)->nullable();
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
        Schema::dropIfExists('device_mode');
    }
}
