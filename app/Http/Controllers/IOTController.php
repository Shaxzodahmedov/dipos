<?php

namespace App\Http\Controllers;

use App\DeviceWeather;
use Illuminate\Http\Request;
use App\DeviceList;
use App\DeviceMode;
use App\DeviceAlarm;
use Carbon\Carbon;


class IOTController extends Controller
{
    public function index(Request $request)
    {
        //Для начало попробуем найти устройство в базе
        $dev_id = DeviceList::where('token', $request['token'])->first();
        if($dev_id['dl_id']){

            //Если устройство определено, записываем текущие данные в базу

            //Обновляем информацию про текущий статус устройства
            $m = DeviceMode::where('dev_id', $dev_id['dl_id'])
                            ->update(['cur_mode' => $request['cur_mode']]);
            //Обновляем статус движение в объекте
            $a = DeviceAlarm::where('dev_id', $dev_id['dl_id'])
                            ->update(['status' => $request['status'],'cur_threshold' => $request['cur_threshold']]);

            //Если есть данные DHT11, то добавляем в базу
            if($request['t'] != "nan" && $request['h'] != "nan") {
                $w = DeviceWeather::create(['dev_id' => $dev_id->dl_id,'t' => $request['t'], 'h' => $request['h']]);

                //Проверяем количество данных
                $count = DeviceWeather::count();

                //Если более 30, удаляю первую
                if ($count>30) {
                    DeviceWeather::first()->delete();
                }
            }

            //Определяем заданный режим устройства MODE
            $dm = DeviceMode::where('dev_id', $dev_id['dl_id'])->first();
            $da = DeviceAlarm::where('dev_id', $dev_id['dl_id'])->first();

            //Проверям порали запускать режим ALARM
            if(Carbon::now('Asia/Tashkent')->hour >= $da['start'] || Carbon::now('Asia/Tashkent')->hour <= $da['finish'])
            {
                $alarm = 1;
            }else
            {
                $alarm = 0;
            }

            $rr = response()->json([
                //'token' => $request['token'],
                'threshold' => $da['threshold'],
                'mode' => $dm['mode'],
                'alarm' => $alarm,
            ]);
        }else{
            //Если устройство не найдено, выдаем ошибку!!!
            $rr = response()->json([
                'error' => 'Не зарегистрированное устройство!!!'
                ]);
        }

        return $rr;
    }
}
