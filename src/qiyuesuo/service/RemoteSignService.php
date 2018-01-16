<?php
namespace qiyuesuo\service;
use qiyuesuo\common\Contract;
use qiyuesuo\common\Company;
use qiyuesuo\common\Stamper;
use qiyuesuo\common\Person;

interface RemoteSignService{
    /**
     * 由pdf文件创建合同
     *
     * @param Contract $contract
     * @return mixed
     */
	public function createByLocal(Contract $contract);

    /**
     * 由合同模板创建合同
     *
     * @param Contract $contract
     * @return mixed
     */
    public function createByTemplate(Contract $contract);

    /**
     * 由html创建合同
     *
     * @param Contract $contract
     * @return mixed
     */
    public function createByHtml(Contract $contract);

    /**
     * 企业用户签署 带签名外观
     *
     * @param string $documentId
     * @param Company $company
     * @param string $sealImageBase64
     * @param Stamper $stamper
     * @return mixed
     */
    public function signByCompany($documentId,Company $company,$sealImageBase64,Stamper $stamper);

    /**
     * 企业用户签署 无签名外观
     *
     * @param string $documentId
     * @param Company $company
     * @return mixed
     */
    public function signBycompanyNoVisible($documentId,Company $company);

    /**
     * 个人用户签署 带签名外观
     *
     * @param string $documentId
     * @param Person $person
     * @param $sealImageBase64
     * @param Stamper $stamper
     * @return mixed
     */
    public function signByPerson($documentId,Person $person,$sealImageBase64,Stamper $stamper);

    /**
     * 个人用户签署 无签名外观
     *
     * @param string $documentId
     * @param Person $person
     * @return mixed
     */
    public function signByPersonNoVisible($documentId,Person $person);

    /**
     * 运营方签署  带签名外观
     *
     * @param string $documentId
     * @param $sealId
     * @param Stamper $stamper
     * @return mixed
     */
    public function signByPlatform($documentId,$sealId,Stamper $stamper);

    /**
     * 运营方签署  无签名外观
     *
     * @param string $documentId
     * @return mixed
     */
    public function signByPlatNoVisible($documentId);

    /**
     *  完成签署
     *
     * @param string $documentId
     * @return mixed
     */
    public function complete($documentId);

    /**
     * 查询合同详情
     *
     * @param string $documentId
     * @return mixed
     */
    public function detail($documentId);

    /**
     * 下载合同清单
     *
     * @param string $documentId 文档id
     * @return mixed
     */
    public function downloadZip($documentId);

	/**
	 * 下载单个合同文件
	 * @param string $documentId 文档id
	 */
    public function downloadPdf($documentId);

    /**
     * 获取公司签署页面链接
     *
     * @param string $documentId
     * @param string $sealImageBase64
     * @param string $successUrl
     * @param string $signCallBackUrl
     * @param string $operation
     * @param Company $company
     * @param Stamper $stamper
     * @return mixed
     */
    public function signUrlCompany($documentId,$sealImageBase64,$successUrl,$signCallBackUrl,$operation,Company $company,Stamper $stamper);

    /**
     * 获取个人签署页面链接
     *
     * @param string $documentId
     * @param string $sealImageBase64
     * @param string $successUrl
     * @param string $signCallBackUrl
     * @param string $operation
     * @param Person $person
     * @param Stamper $stamper
     * @return mixed
     */
    public function signUrlPerson($documentId,$sealImageBase64,$successUrl,$signCallBackUrl,$operation,Person $person,Stamper $stamper);

    /**
     * 获取查看合同页面的链接
     *
     * @param $documentId
     * @return mixed
     */
    public function viewUrl($documentId);

    /**
     * 测试回调地址是否可用
     *
     * @param string $signCallBackUrl
     * @return mixed
     */
    public function callbackcheckout($signCallBackUrl);
}