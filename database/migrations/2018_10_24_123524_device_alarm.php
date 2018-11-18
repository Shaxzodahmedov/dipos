<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeviceAlarm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_alarm', function (Blueprint $table) {
            $table->increments('da_id');
            $table->integer('dev_id');
            $table->integer('start')->length(2);
            $table->integer('finish')->length(2);
            $table->integer('threshold')->length(4)->defautl("600");
            $table->integer('cur_threshold')->length(4)->nullable();
            $table->tinyInteger('status')->length(1)->nullable();
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
        Schema::dropIfExists('device_alarm');
    }
}
