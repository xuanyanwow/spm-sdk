<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/26
 * Time: 14:02
 */

namespace spm\test;

use spm\bean\LogDataBean;
use spm\Reporter;
require_once "../vendor/autoload.php";

class Logs
{
    public function guzzle()
    {
        $config = new \spm\Config();
        $config->setUrl("http://www.siam.com/public/index.php");
        $config->setProjectId(1);
        Reporter::instance($config);

        $bean = new LogDataBean();
        $bean->setLogCategory("Wechat/Test/SDK");
        $bean->setLogData('{"key": "value"}');
        $bean->setLogFrom("SDK");
        $bean->setLogPoint("test guzzle");
        $bean->setLogSn("123456");
        Reporter::instance()->log($bean);
    }
}


$class = new Logs();
$class->guzzle();