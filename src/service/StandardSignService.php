<?php
namespace qiyuesuo\service;
use qiyuesuo\common\Contract;
use qiyuesuo\common\Stamper;

interface StandardSignService
{
    /**
     * 由pdf文件创建合同
     *
     * @param string $jsonReceivers
     * @param Contract $contract
     * @return mixed
     */
    public function createByLocal($jsonReceivers, Contract $contract);

    /**
     * 由合同模板创建合同
     *
     * @param string $jsonReceivers
     * @param Contract $contract
     * @return mixed
     */
    public function createByTemplate($jsonReceivers, Contract $contract);

    /**
     *  由html创建合同
     *
     * @param string $jsonReceivers
     * @param Contract $contract
     * @return mixed
     */
    public function createByHtml($jsonReceivers, Contract $contract);

    /**
     * 运营方公章签署
     *
     * @param string $documentId
     * @param string $sealId
     * @param Stamper $stamper
     * @param $acrossPage
     * @return mixed
     */
    public function sign($documentId, $sealId, Stamper $stamper, $acrossPage);

    /**
     * 运营方法人章签署
     *
     * @param string $documentId
     * @param Stamper $stamper
     * @return mixed
     */
    public function signByLegalPerson($documentId, Stamper $stamper);

    /**
     * 查询合同详情
     * @param string $documentId 合同文档ID
     * @return mixed
     */
    public function detail($documentId);

    /**
     * 下载合同清单，包括合同文档和合同详情的pdf文件
     *
     * @param string $documentId
     * @return mixed
     */
    public function download($documentId);

    /**
     * 下载单个合同文件
     *
     * @param string $documentId
     * @return mixed
     */
    public function downloadDoc($documentId);

    /**
     * 下载单个合同文件
     *
     * @return mixed
     */
    public function queryCategory();
}