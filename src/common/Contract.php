<?php

namespace qiyuesuo\common;

class Contract
{

    /**
     * subject 合同主题
     * expireTime合同过期时间；过期未结束签署，则作废，不传该参数则默认30天后过期。
     * templateId合同模板ID；合同模板在契约锁云平台维护，请到契约锁云平台查看模板ID
     * docName 合同文件名称
     * templateParams合同模版参数，键值对形式字符串，如：｛“product”:“半年定期”, "amount": "10000"｝
     * html   html格式的合同
     * file   合同文件
     *
     * receiveType 签署顺序；SEQ（顺序签署）、SIMUL（无序签署）；默认SEQ
     * categoryId 合同分类ID,分类在契约锁云平台进行维护
     */
    private $subject;
    private $expireTime;
    private $templateId;
    private $docName;
    private $templateParams;
    private $html;
    private $file;

    private $receiveType;
    private $categoryId;

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * @param mixed $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getDocName()
    {
        return $this->docName;
    }

    /**
     * @param mixed $docName
     */
    public function setDocName($docName)
    {
        $this->docName = $docName;
    }

    /**
     * @return mixed
     */
    public function getTemplateParams()
    {
        return $this->templateParams;
    }

    /**
     * @param mixed $templateParams
     */
    public function setTemplateParams($templateParams)
    {
        $this->templateParams = $templateParams;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param mixed $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getReceiveType()
    {
        return $this->receiveType;
    }

    /**
     * @param mixed $receiveType
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
}