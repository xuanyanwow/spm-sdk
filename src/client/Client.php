<?php

namespace spm\client;


use spm\bean\ApiDataBean;
use spm\bean\ExceptionDataBean;
use spm\bean\LogDataBean;
use spm\Config;
use spm\utility\LazyLogData;

abstract class Client
{
    /** @var Config */
    protected $config;

    /**
     * 上报api数据
     * @param $data
     * @return
     */
    public function report(ApiDataBean $data){
        $url = $this->reportApiPath();
        $data->setProjectId($this->config->getProjectId());
        return $this->send($url, $data->toArray());
    }

    /**
     * 上报log数据
     * @param $data
     * @return mixed
     */
    public function log(LogDataBean $data){
        $data->setProjectId($this->config->getProjectId());
        if ($this->config->isLazyLog()){
            LazyLogData::instance()->set($data);
            return true;
        }

        $url = $this->logApiPath();
        return $this->send($url, $data->toArray());
    }

    /**
     * 一次性上报懒log数据
     * @return bool
     */
    public function lazy_log_send()
    {
        $lazyData = LazyLogData::instance()->get();
        if (empty($lazyData)){
            return true;
        }

        $url = $this->lazyLogPath();
        $res = $this->send($url, ['json' => json_encode($lazyData, 256)]);
        LazyLogData::instance()->reset();

        return $res;
    }

    /**
     * 上报异常
     * @param ExceptionDataBean $bean
     * @return mixed
     */
    public function exception_report(ExceptionDataBean $bean)
    {
        $url = $this->exceptionApiPath();
        $bean->setProjectId($this->config->getProjectId());
        return $this->send($url, $bean->toArray());
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
        return $this->config->getUrl()."/api/logs/report";
    }

    private function exceptionApiPath()
    {
        return $this->config->getUrl()."/api/abnormal/report";
    }

    private function lazyLogPath()
    {
        return $this->config->getUrl()."/api/logs/lazy_report";
    }
}