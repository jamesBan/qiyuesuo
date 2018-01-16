<?php

namespace qiyuesuo\impl;

use qiyuesuo\common\Contract;
use qiyuesuo\common\SDKClient;
use qiyuesuo\common\Stamper;
use qiyuesuo\service\StandardSignService;

class StandardSignServiceImpl implements StandardSignService
{
    const  FIND_COMPANYSEAL = '/seal?sealId=';
    const  CREATE_CONTRACT = "/standard/contract/create";
    const  CREATE_CONTRACTBYFILE = "/standard/contract/createbyfile";
    const  CREATE_CONTRACTBYTEMPLATE = "/standard/contract/createbytemplate";
    const  CREATE_CONTRACTBYHTML = "/standard/contract/createbyhtml";
    const  PLATFORM_SIGN = "/standard/contract/sign";
    const  LEGALPERSON_SIGN = "/standard/contract/signbylegalperson";
    const  QUERY_CONTRACTDETAIL = "/standard/contract/detail";
    const  DOWNLOAD_CONTRACT = "/standard/contract/download";
    const  DOWNLOAD_DOCUMENT = "/standard/document/download";
    const  CONTRACT_SIGNURL = "/standard/contract/signurl";
    const  CONTRACT_CATEGORY = "/standard/category";

    private $SDk;

    function __construct(SDKClient $SDk)
    {
        $this->SDk = $SDk;
    }

    public function createByLocal($json_receivers, Contract $contract)
    {
        $post_data = array(
            "subject" => $contract->getSubject(),//合同主题
            "expireTime" => $contract->getExpireTime(),//合同截止日期；默认为合同创建日期往后30天，格式：yyyy-MM-dd HH:mm:ss
            "docName" => $contract->getDocName(),//文件名称
            "receivers" => $json_receivers,//合同接收方（合同签署方）；是Receiver集合的Json字符串
            "categoryId" => $contract->getCategoryId(),//合同分类ID,分类在契约锁云平台进行维护
            "receiveType" => $contract->getReceiveType(),//签署顺序；SEQ（顺序签署）、SIMUL（无序签署）；默认SEQ
            "file" => $contract->getFile()//file:合同文件
        );

        $check_result = check($post_data, 'createByLocal');
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }

        $serviceUrl = self::CREATE_CONTRACTBYFILE;

        $result = $this->SDk->service($serviceUrl, $post_data);
        return $result;
    }

    public function createByHtml($jsonReceivers, Contract $contract)
    {
        $post_data = array(
            "subject" => $contract->getSubject(),//合同主题
            "expireTime" => $contract->getExpireTime(),//合同截止日期；默认为合同创建日期往后30天，格式：yyyy-MM-dd HH:mm:ss
            "receivers" => $jsonReceivers,
            "docName" => $contract->getDocName(),//文件名称
            "receiveType" => $contract->getReceiveType(),//签署顺序；SEQ（顺序签署）、SIMUL（无序签署）；默认SEQ
            "html" => $contract->getHtml()//html格式的合同
        );
        $check_result = check($post_data, 'createByHtml');
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }

        $serviceUrl = self::CREATE_CONTRACTBYHTML;

        return $this->SDk->service($serviceUrl, $post_data);
    }

    public function createByTemplate($jsonReceivers, Contract $contract)
    {
        $post_data = array(
            "subject" => $contract->getSubject(),//合同主题
            "expireTime" => $contract->getExpireTime(),//合同截止日期；默认为合同创建日期往后30天，格式：yyyy-MM-dd HH:mm:ss
            "templateId" => $contract->getTemplateId(),//合同模板ID
            "receivers" => $jsonReceivers,//合同接收人；是Receiver集合的Json字符串
            "docName" => $contract->getDocName(),//文件名称
            "receiveType" => $contract->getReceiveType(),//签署顺序；SEQ（顺序签署）、SIMUL（无序签署）；默认SEQ
            "templateParams" => $contract->getTemplateParams()//合同模板参数；键值对形式字符串
        );
        $check_result = check($post_data, 'createByTemplate');
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }

        $serviceUrl = self::CREATE_CONTRACTBYTEMPLATE;

        $post_data = http_build_query($post_data);
        return $this->SDk->service($serviceUrl, $post_data);
    }

    public function sign($documentId, $sealId, Stamper $stamper, $acrossPage)
    {
        $templates = array(
            'offsetX' => $stamper->getOffsetX(),
            'offsetY' => $stamper->getOffsetY(),
            'page' => $stamper->getPage()
        );
        $post_data = array(
            "documentId" => $documentId,//合同文档ID
            "sealId" => $sealId,//公章ID
            "keyword" => $stamper->getKeyword(),
            "acrossPage" => $acrossPage,//	是否签骑缝章，默认为false
            "location" => json_encode($templates)
        );
        $check_result = checkSign($post_data, 'signStand');
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }
        $serviceUrl = self::PLATFORM_SIGN;

        return $this->SDk->service($serviceUrl, $post_data);
    }

    public function signByLegalPerson($documentId, Stamper $stamper)
    {
        $templates = array(
            'offsetX' => $stamper->getOffsetX(),
            'offsetY' => $stamper->getOffsetY(),
            'page' => $stamper->getPage()
        );
        $post_data = array(
            "documentId" => $documentId,//合同文档ID
            "keyword" => $stamper->getKeyword(),//签署位置的关键字
            "location" => json_encode($templates)//签署位置坐标；Json字符串
        );
        $check_result = checkSign($post_data, 'lpSignStand');
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }
        $serviceUrl = self::LEGALPERSON_SIGN;

        return $this->SDk->service($serviceUrl, $post_data);
    }

    public function detail($documentId)
    {
        if (!is_string($documentId) || !$documentId) {
            $result = array(
                'code' => '1005',
                'message' => '合同文档ID参数出错'
            );
            return $result;
        }
        $serviceUrl = self::QUERY_CONTRACTDETAIL . '?documentId=' . $documentId;

        return $this->SDk->service($serviceUrl, null);
    }


    public function download($documentId)
    {
        $check_result = checkDown($documentId);
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }
        $serviceUrl = self::DOWNLOAD_CONTRACT . '?documentId=' . $documentId;

        $output = $this->SDk->service($serviceUrl, null);
        return $output;
    }


    public function downloadDoc($documentId)
    {
        $check_result = checkDown($documentId);
        if (!($check_result['code'] === 0)) {
            return $check_result;
        }
        $serviceUrl = self::DOWNLOAD_DOCUMENT . '?documentId=' . $documentId;

        $output = $this->SDk->service($serviceUrl, null);
        return $output;
    }

    public function queryCategory()
    {
        $serviceUrl = self::CONTRACT_CATEGORY;

        return $this->SDk->service($serviceUrl, null);
    }

}