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
    public function lazy_log_guzzle()
    {
        $config = new \spm\Config();
        $config->setUrl("http://www.siam.com/public/index.php");
        $config->setProjectId(1);
        Reporter::instance($config);

        $config->setLazyLog(true);

        $bean = new LogDataBean();
        $bean->setLogCategory("Wechat/Test_lazy/SDK");
        $bean->setLogData('{"key": "value"}');
        $bean->setLogFrom("SDK");
        $bean->setLogPoint("test guzzle");
        $bean->setLogSn("20191128");
        Reporter::instance()->log($bean);

        $bean = new LogDataBean();
        $bean->setLogCategory("Wechat/Test_lazy/SDK");
        $bean->setLogData('22222');
        $bean->setLogFrom("SDK");
        $bean->setLogPoint("test guzzle");
        $bean->setLogSn("20191128");
        Reporter::instance()->log($bean);

        Reporter::instance()->lazy_log_send();
    }
}


$class = new Logs();
$class->lazy_log_guzzle();