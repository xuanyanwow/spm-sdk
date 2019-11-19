<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 18:01
 */

namespace spm\bean;


use EasySwoole\Spl\SplBean;

class ApiDataBean extends SplBean
{
    protected $category;
    protected $method;
    protected $consume_time;
    protected $user_from;
    protected $user_identify;
    protected $is_success;
    protected $api_param;
    protected $api_response;

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
     */
    public function setIsSuccess($is_success)
    {
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
    public function setApiParam($api_param)
    {
        $this->api_param = $api_param;
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