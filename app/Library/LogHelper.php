<?php
namespace App\Library; class LogHelper { public static function setLogFile($sp88bc5b) { \Log::getMonolog()->setHandlers(array()); \Log::useDailyFiles(storage_path() . '/logs/' . $sp88bc5b . '.log', 0, config('app.log_level')); } }