<?php
namespace qiyuesuo\common;

class Company
{
    private $name;//企业名称
    private $registerNo;//工商注册号
    private $email;//公司邮箱
    private $telephone;//联系电话
    private $address;//公司地址
    private $contact;//联系人姓名

    private $legalPerson;//法人姓名
    private $legalPersonId;

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
    public function getRegisterNo()
    {
        return $this->registerNo;
    }

    /**
     * @param mixed $registerNo
     */
    public function setRegisterNo($registerNo)
    {
        $this->registerNo = $registerNo;
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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getLegalPerson()
    {
        return $this->legalPerson;
    }

    /**
     * @param mixed $legalPerson
     */
    public function setLegalPerson($legalPerson)
    {
        $this->legalPerson = $legalPerson;
    }

    /**
     * @return mixed
     */
    public function getLegalPersonId()
    {
        return $this->legalPersonId;
    }

    /**
     * @param mixed $legalPersonId
     */
    public function setLegalPersonId($legalPersonId)
    {
        $this->legalPersonId = $legalPersonId;
    }

    public function get_array()
    {
        $arr = array();
        if ($this->name) {
            array_push($arr, $this->name);
        }
    }
}