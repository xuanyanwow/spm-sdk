<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/25
 * Time: 16:32
 */

namespace spm\test;

use spm\bean\ExceptionDataBean;
use spm\Reporter;

require_once "../vendor/autoload.php";

class ExceptionReport
{
    public function guzzle()
    {
        $config = new \spm\Config();
        $config->setUrl("http://www.siam.com/public/index.php");
        $config->setProjectId(1);

        Reporter::instance($config);

        $bean = new ExceptionDataBean();
        $bean->setAbClass('\Siam\test\Class');
        $bean->setAbData([
            'get' => [
                'field1' => 'value1'
            ]
        ]);
        $bean->setAbDate(date('Y-m-d'));
        $bean->setAbFile("错误的文件地址");
        $bean->setAbFileresources([
            [//[{"is_hight":0, "text": "代码", "line" :100}, {"is_hight":1, "text": "代码2", "line" :101}]
                'is_hight' => 0, // 是否高亮
                'text'     => "内容",
                'line' => "行号"
            ]
        ]);
        $bean->setAbLine(320);
        $bean->setAbStack([
            ['第一行stack'],
            ['第二行stack'],
        ]);
        $bean->setAbMessage("错误消息");
        Reporter::instance()->exception_report($bean);

        return true;
    }
}


$class = new ExceptionReport();
$class->guzzle();