<?php
namespace qiyuesuo\common;

/** 
* 合同接收人信息
*/ 
class Receiver {
	public $type;//接收人类型  PERSONAL（个人），COMPANY（公司），PLATFORM(平台）
	public $name;//个人姓名（或公司名称）
	public $mobile;//个人手机号/公司经办人手机号
	public $ordinal;//签署顺序；从1开始
	public $authLevel;//认证级别；BASIC（初级认证），FULL（加强认证）
	public $legalPersonRequired;//是否需要签署法人章
	

	function __construct($type){  
		$this->type = $type;  
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getOrdinal()
    {
        return $this->ordinal;
    }

    /**
     * @param mixed $ordinal
     */
    public function setOrdinal($ordinal)
    {
        $this->ordinal = $ordinal;
    }

    /**
     * @return mixed
     */
    public function getAuthLevel()
    {
        return $this->authLevel;
    }

    /**
     * @param mixed $authLevel
     */
    public function setAuthLevel($authLevel)
    {
        $this->authLevel = $authLevel;
    }

    /**
     * @return mixed
     */
    public function getLegalPersonRequired()
    {
        return $this->legalPersonRequired;
    }

    /**
     * @param mixed $legalPersonRequired
     */
    public function setLegalPersonRequired($legalPersonRequired)
    {
        $this->legalPersonRequired = $legalPersonRequired;
    }
}

