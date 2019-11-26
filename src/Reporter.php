<?php

namespace spm;


use spm\bean\ApiDataBean;
use spm\bean\ExceptionDataBean;
use spm\bean\LogDataBean;
use spm\client\Client;
use spm\client\Guzzle;
use spm\exception\Exception;

class Reporter
{
    private static $instance;
    private $config;

    private function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Config|NULL $config
     * @return static
     */
    public static function instance(Config $config = NULL):Reporter
    {
        if (!static::$instance instanceof static){
            static::$instance = new static($config);
        }
        return static::$instance;
    }

    public function report(ApiDataBean $data)
    {
        try {
            $client = $this->client();
            $client->report($data);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * 上报异常
     * @param ExceptionDataBean $bean
     * @return mixed
     */
    public function exception_report(ExceptionDataBean $bean)
    {
        try {
            $client = $this->client();
            $client->exception_report($bean);
        } catch (Exception $e) {
            return false;
        }
    }

    public function log(LogDataBean $bean)
    {
        try {
            $client = $this->client();
            return $client->log($bean);
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function client():Client
    {
        $type = $this->config->getType();
        switch ($this->config->getisCoroutine()){
            case Config::IS_COROUTINE:
                if ($type === Config::TYPE_HTTP){

                }elseif ($type === Config::TYPE_TCP){

                }else{
                    throw new Exception("Config Type Error");
                }
                break;
            case Config::NO_COROUTINE;
                if ($type === Config::TYPE_HTTP){
                    return new Guzzle($this->config);
                }elseif ($type === Config::TYPE_TCP){

                }else{
                    throw new Exception("Config Type Error");
                }
                break;
        }
    }
}
