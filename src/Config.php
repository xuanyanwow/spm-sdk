<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 17:18
 */

namespace spm;


use EasySwoole\Spl\SplBean;

class Config extends SplBean
{
    const TYPE_HTTP = 0;
    const TYPE_TCP  = 1;

    const NO_COROUTINE = 0;
    const IS_COROUTINE = 1;

    protected $type = self::TYPE_HTTP;
    protected $is_coroutine = self::NO_COROUTINE;
    protected $url;
    protected $project_id;
    protected $lazy_log = false;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getisCoroutine()
    {
        return $this->is_coroutine;
    }

    /**
     * @param int $is_coroutine
     */
    public function setIsCoroutine($is_coroutine)
    {
        $this->is_coroutine = $is_coroutine;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return bool
     */
    public function isLazyLog(): bool
    {
        return $this->lazy_log;
    }

    /**
     * @param bool $lazy_log
     */
    public function setLazyLog(bool $lazy_log)
    {
        $this->lazy_log = $lazy_log;
    }


    
}