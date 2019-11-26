<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 18:01
 */

namespace spm\bean;


use EasySwoole\Spl\SplBean;

class LogDataBean extends SplBean
{
    protected $project_id;
    protected $log_category;
    protected $log_point;
    protected $log_sn;
    protected $log_data;
    protected $log_from;

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
     * @return mixed
     */
    public function getLogCategory()
    {
        return $this->log_category;
    }

    /**
     * @param mixed $log_category
     */
    public function setLogCategory($log_category)
    {
        $this->log_category = $log_category;
    }

    /**
     * @return mixed
     */
    public function getLogPoint()
    {
        return $this->log_point;
    }

    /**
     * @param mixed $log_point
     */
    public function setLogPoint($log_point)
    {
        $this->log_point = $log_point;
    }

    /**
     * @return mixed
     */
    public function getLogSn()
    {
        return $this->log_sn;
    }

    /**
     * @param mixed $log_sn
     */
    public function setLogSn($log_sn)
    {
        $this->log_sn = $log_sn;
    }

    /**
     * @return mixed
     */
    public function getLogData()
    {
        return $this->log_data;
    }

    /**
     * @param mixed $log_data
     */
    public function setLogData($log_data)
    {
        $this->log_data = $log_data;
    }

    /**
     * @return mixed
     */
    public function getLogFrom()
    {
        return $this->log_from;
    }

    /**
     * @param mixed $log_from
     */
    public function setLogFrom($log_from)
    {
        $this->log_from = $log_from;
    }



}