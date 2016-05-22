<?php
namespace wh\getui\utils;

class LogUtils
{
    static $debug = false;
    public static function debug($log)
    {
        if (LogUtils::$debug)
            echo ($log) . "\r\n";
    }
}