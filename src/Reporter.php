<?php

namespace spm;


class Reporter
{
    private static $instance;

    private function __construct($config)
    {
    }

    public static function instance($config = NULL)
    {
        if (!static::$instance instanceof static){
            static::$instance = new static($config);
        }
        return static::$instance;
    }

    public function report($data)
    {
        
    }
}