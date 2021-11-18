<?php


class Log
{

    // Should display current date : '2021-04-26 14:00:03 - Accessing file'
    public static function save_log()
    {
        $fHandle = fopen('log.txt', 'a');
        $fContent = date('Y-m-d H:m:s') . ' - Accessing file';
        fwrite($fHandle, $fContent);
    }
}

Log::saveLog();
