<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceWeather extends Model
{
    protected $table = "device_weather";
	protected $guarded = [];
	protected $primaryKey = 'dw_id';
}
