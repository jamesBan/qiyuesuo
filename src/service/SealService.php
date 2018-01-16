<?php
namespace qiyuesuo\service;
interface SealService
{
    /**
     * 查找印章
     * @param string sealId 印章ID
     * @return mixed
     */
    public function findSeal($sealId);

    /**
     * 生成企业电子印章
     * @param string companyName 企业信息
     * @return mixed
     */
    public function generateSeal($companyName);

    /**
     * 生成个人电子印章
     * @param string personalName 印章上显示的用户名称
     * @return mixed
     */
    public function generatePersonalSeal($personalName);

    /**
     * 获取所有可用的平台印章
     * @return mixed
     */
    public function sealList();
}