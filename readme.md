# SPM-SDK

上报SiamProjectManage项目平台使用

封装上报流程，项目内使用。

# 安装

```
composer require siam/spm-sdk  
```

# 开始使用

## api统计上报

在全局的地方注册配置信息，如入口文件、配置文件

```php
use spm\Config;
$config = new Config();
$config->setUrl("http://www.spm.com/public/index.php");
$config->setProjectId(1); // 项目id
```

接着可以继续记录开始时间（这里提供辅助类，可以自己实现）
```php
use spm\utility\Timer;

Timer::start();
```

在业务逻辑结束后，上报api（建议封装对客户端的响应方法，在封装里增加上报逻辑，全局生效）

伪代码
```php
public function response($code, $data, $msg, $apiReport = [])
```

```php
use spm\exception\Exception;
use spm\exception\TimerException;
use spm\utility\Timer;
use spm\bean\ApiDataBean;
use spm\Reporter;

$param = [
    'key1' => 'value1',
    'key2' => 'value2',
];

try{
    $apiLog = new ApiDataBean();
    $apiLog->setCategory("Wechat"); // 接口名 - 分类
    $apiLog->setMethod("jspay");  // 接口名 - 方法
    $apiLog->setUserFrom("Siam"); // 调用api的客户来源标识
    $apiLog->setUserIdentify(time().rand(1000,9999)); // 标识，比如订单号 用于后台追溯查看
    $apiLog->setApiResponse(json_encode($param)); // 响应给客户端的内容 比如json字符串 xml字符串等
    $apiLog->setConsumeTime(Timer::end());
    $apiLog->setApiParam($param);
    $apiLog->setIsSuccess(ApiDataBean::SUCCESS); // 可选ApiDataBean::FAIL
} catch (Exception $e) {
    return $e->getMessage();
} catch (TimerException $e) {
    return $e->getMessage();
}

Reporter::instance()->report($apiLog);
```