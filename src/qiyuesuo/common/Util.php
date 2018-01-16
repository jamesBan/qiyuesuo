<?php

namespace qiyuesuo\common;

class Util
{
    private $url = "https://openapi.qiyuesuo.me";
    private $accessKey = "0VPomO22**";
    private $accessSecret = "nOcih5AtxnD6vCmYLWi42iz2VJM0**";


    /**
     * Util constructor.
     * @param $url
     * @param $accessKey
     * @param $accessSecret
     *
     * @return SDKClient
     */
    public function __construct($url, $accessKey, $accessSecret)
    {
        $this->setUrl($url);
        $this->setAccessKey($accessKey);
        $this->setAccessSecret($accessSecret);

        return $this->getSDk();
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;
    }


    /**
     * @return string
     */
    public function getAccessSecret()
    {
        return $this->accessSecret;
    }

    /**
     * @param string $accessSecret
     */
    public function setAccessSecret($accessSecret)
    {
        $this->accessSecret = $accessSecret;
    }


    /**
     * @return SDKClient
     */
    private function getSDk()
    {
        $SDk = new SDKClient($this->getAccessKey(), $this->getAccessSecret(), $this->getUrl());
        return $SDk;
    }

}