<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 18:16
 */
namespace spm\test;
use spm\exception\Exception;
use spm\exception\TimerException;
use spm\utility\Timer;
use spm\bean\ApiDataBean;
use spm\Reporter;
require_once "../vendor/autoload.php";
class Report
{

    /**
     * @return string|bool|null
     */
    public function guzzle()
    {
        Timer::start();
        $config = new \spm\Config();
        $config->setUrl("http://www.siam.com/public/index.php");
        $config->setProjectId(1);

        Reporter::instance($config);

        $param = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        try{
            $apiLog = new ApiDataBean();
            $apiLog->setCategory("Wechat");
            $apiLog->setMethod("jspay");
            $apiLog->setUserFrom("Siam");
            $apiLog->setUserIdentify(time().rand(1000,9999));
            $apiLog->setApiResponse(json_encode($param));
            $apiLog->setConsumeTime(Timer::end());
            $apiLog->setApiParam($param);
            $apiLog->setIsSuccess(ApiDataBean::SUCCESS);
        } catch (Exception $e) {
            return $e->getMessage();
        } catch (TimerException $e) {
            return $e->getMessage();
        }

        Reporter::instance()->report($apiLog);

        return true;
    }
}

$class = new Report();
$class->guzzle();