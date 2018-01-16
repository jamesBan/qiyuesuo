<?php

namespace qiyuesuo\service\impl;

use qiyuesuo\common\SDKClient;
use qiyuesuo\service\TemplateService;

class TemplateServiceImpl implements TemplateService
{
    const  CONTRACT_TEMPLATE = "/template";
    const  CONTRACT_TEMPLATE_DETAIL = "/template/detail?id=";
    private $SDk;

    function __construct(SDKClient $SDk)
    {
        $this->SDk = $SDk;
    }

    function queryTemplate()
    {
        $serviceUrl = self::CONTRACT_TEMPLATE;
        return $this->SDk->service($serviceUrl, null);
    }

    function queryTemplateDetail($templateId)
    {
        $serviceUrl = self::CONTRACT_TEMPLATE_DETAIL . $templateId;
        return $this->SDk->service($serviceUrl, null);
    }
}