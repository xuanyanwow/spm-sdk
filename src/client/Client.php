<?php

namespace spm\client;


use spm\bean\ApiDataBean;
use spm\bean\LogDataBean;
use spm\Config;

abstract class Client
{
    protected $config;

    /**
     * 上报api数据
     * @param $data
     * @return
     */
    public function report(ApiDataBean $data){
        $url = $this->reportApiPath();
        return $this->send($url, $data->toArray());
    }

    /**
     * 上报log数据
     * @param $data
     */
    public function log(LogDataBean $data){
        $url = $this->logApiPath();
        return $this->send($url, $data);
    }

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    abstract public function send($url, $data);

    protected function reportApiPath()
    {
        return $this->config->getUrl()."/api/api_log/report";
    }

    protected function logApiPath()
    {
        return $this->config->getUrl()."/api/log/report";
    }
}