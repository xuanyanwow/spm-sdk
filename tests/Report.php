<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/19
 * Time: 18:16
 */
namespace spm\test;
require_once "../vendor/autoload.php";
class Report
{
    public function guzzle()
    {
        $config = new \spm\Config();
        $config->setUrl("http://www.siam.com/public/index.php");
        $config->setProjectId(1);

        \spm\Reporter::instance($config);

        $apiLog = new \spm\bean\ApiDataBean();
        $apiLog->setCategory("Wechat");
        $apiLog->setMethod("jspay");
        $apiLog->setUserFrom("Siam");
        $apiLog->setUserIdentify(time());
        $apiLog->setApiResponse("teststs");

        \spm\Reporter::instance()->report($apiLog);
    }
}

$class = new Report();
$class->guzzle();