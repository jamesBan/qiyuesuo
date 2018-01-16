<?php
namespace qiyuesuo\service;

interface  TemplateService
{
    /**
     * 查询运营方在契约锁上维护的合同模板
     * @return mixed
     */
    public function queryTemplate();

    /**
     * 查询合同模板详情
     * @param string $templateId 模板id
     * @return mixed
     */
    public function queryTemplateDetail($templateId);
}