<?php
require_once "vendor/autoload.php";

use qiyuesuo\common\SDKClient;
use qiyuesuo\impl\SealServiceImpl;

//印章接口测试
$sdk = new SDKClient("0VPomO22**", "nOcih5AtxnD6vCmYLWi42iz2VJM0**", "https://openapi.qiyuesuo.me");
$sealServiceImpl = new SealServiceImpl($sdk);
$result =  $sealServiceImpl->findSeal('123456');
print_r($result);