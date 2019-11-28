<?php
/**
 * 延迟上报log数据
 * User: Siam
 * Date: 2019/11/28
 * Time: 10:25
 */

namespace spm\utility;


use spm\bean\LogDataBean;

class LazyLogData
{
    private static $instance;
    private $config;
    private $data = [];

    private function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param null $config
     * @return LazyLogData
     */
    public static function instance($config = NULL)
    {
        if (!static::$instance instanceof static) {
            static::$instance = new static($config);
        }
        return static::$instance;
    }

    public function set(LogDataBean $bean)
    {
        $this->data[] = $bean;
    }

    public function get()
    {
        return $this->data;
    }

    public function reset()
    {
        $this->data = [];
    }

}