<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 18:01
 */

namespace spm\bean;


use EasySwoole\Spl\SplBean;
use spm\exception\Exception;

class ApiDataBean extends SplBean
{
    const SUCCESS = 1;
    const FAIL = 0;

    protected $category;
    protected $method;
    protected $consume_time;
    protected $user_from;
    protected $user_identify;
    protected $is_success;
    protected $api_param;
    protected $api_response;
    protected $project_id;

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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getConsumeTime()
    {
        return $this->consume_time;
    }

    /**
     * @param mixed $consume_time
     */
    public function setConsumeTime($consume_time)
    {
        $this->consume_time = $consume_time;
    }

    /**
     * @return mixed
     */
    public function getUserFrom()
    {
        return $this->user_from;
    }

    /**
     * @param mixed $user_from
     */
    public function setUserFrom($user_from)
    {
        $this->user_from = $user_from;
    }

    /**
     * @return mixed
     */
    public function getUserIdentify()
    {
        return $this->user_identify;
    }

    /**
     * @param mixed $user_identify
     */
    public function setUserIdentify($user_identify)
    {
        $this->user_identify = $user_identify;
    }

    /**
     * @return mixed
     */
    public function getisSuccess()
    {
        return $this->is_success;
    }

    /**
     * @param mixed $is_success
     * @throws Exception
     */
    public function setIsSuccess(int $is_success)
    {
        if ($is_success !== 1 && $is_success !==0){
            throw new Exception("is_succee's value must be eq 0 or 1");
        }
        $this->is_success = $is_success;
    }

    /**
     * @return mixed
     */
    public function getApiParam()
    {
        return $this->api_param;
    }

    /**
     * @param mixed $api_param
     */
    public function setApiParam(array $api_param)
    {
        $this->api_param = json_encode($api_param);
    }

    /**
     * @return mixed
     */
    public function getApiResponse()
    {
        return $this->api_response;
    }

    /**
     * @param mixed $api_response
     */
    public function setApiResponse($api_response)
    {
        $this->api_response = $api_response;
    }


}