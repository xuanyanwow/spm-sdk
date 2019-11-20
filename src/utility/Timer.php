<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/20
 * Time: 9:00
 */

namespace spm\utility;


use spm\exception\TimerException;

class Timer
{
    private static $data;

    /**
     * @param string $iden
     */
    public static function start($iden = "siam")
    {
        self::$data[$iden] = microtime(true);
    }

    /**
     * @param string $iden
     * @return int
     * @throws TimerException
     */
    public static function end($iden = "siam")
    {
        if (!isset(self::$data[$iden])){
            throw new TimerException("iden {$iden} has not set start value");
        }
        $now = microtime(true);
        $tem = $now - self::$data[$iden];
        unset(self::$data[$iden]);
        return ceil($tem * 1000);
    }
}