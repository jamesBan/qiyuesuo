php SDK提供了契约锁API的请求封装、摘要签名、响应解释等功能，您可以直接使用SDK实现合同的签署流程。

php 版本说明：PHP5.6及以上；

```php
<?php
require_once "vendor/autoload.php";

use qiyuesuo\impl\SealServiceImpl;
use qiyuesuo\common\Util;


//印章接口测试
$sdk = new SDKClient("0VPomO22**", "nOcih5AtxnD6vCmYLWi42iz2VJM0**", "https://openapi.qiyuesuo.me");
$sealServiceImpl = new SealServiceImpl($sdk);
$result =  $sealServiceImpl->findSeal('123456');
print_r($result);
```

其他接口参考[官方github](https://github.com/qiyuesuo/sdk-php-sample)
