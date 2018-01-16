<?php
namespace qiyuesuo\common;

class Person{
	private $name;//用户姓名
    private $idcard;//证件号码
    private $mobile;//手机号
    private $email;//邮箱
    private $gender;//性别。'MALE'  男, 'FEMALE'   女
    private $paperType;

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
    public function getIdcard()
    {
        return $this->idcard;
    }

    /**
     * @param mixed $idcard
     */
    public function setIdcard($idcard)
    {
        $this->idcard = $idcard;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPaperType()
    {
        return $this->paperType;
    }

    /**
     * @param mixed $paperType
     */
    public function setPaperType($paperType)
    {
        $this->paperType = $paperType;
    }//证件类型（idcard非空时必填）；IDCARD（居民二代身份证）、PASSPORT（护照）、OTHER（其他）
	

}