<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class GlobalHelper
{
    public static function getAppName(){
        $record = self::getSuperAdminSettingValue('app_name');

        return (!empty($record)) ? $record : config('app.name');
    }

    private static function getSuperAdminSettingValue($key){
        static $settings;
        try {
            DB::connection()->getPdo();
            if (empty($settings)) {
                $settings = Setting::all()->keyBy('key');
            }
            return $settings[$key]->value;
        } catch (\Exception $e) {
        }
    }
}
