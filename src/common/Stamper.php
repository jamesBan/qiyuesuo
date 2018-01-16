<?php
namespace qiyuesuo\common;

class Stamper{
	private $offsetX;//横坐标
	private $offsetY;//纵坐标
	private $keyword;//关键字；用来确定印章的坐标位置
	private $keywordIndex;//关键字索引，默认为1；1代表第一个；-1代表最后一个
	private $page;//印章所在页码
	private $acrossPagePosition;//骑缝章 并指定位置  骑缝章纵坐标百分比（取值范围：大于0 小于1）

    /**
     * @return mixed
     */
    public function getOffsetX()
    {
        return $this->offsetX;
    }

    /**
     * @param mixed $offsetX
     */
    public function setOffsetX($offsetX)
    {
        $this->offsetX = $offsetX;
    }

    /**
     * @return mixed
     */
    public function getOffsetY()
    {
        return $this->offsetY;
    }

    /**
     * @param mixed $offsetY
     */
    public function setOffsetY($offsetY)
    {
        $this->offsetY = $offsetY;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return mixed
     */
    public function getKeywordIndex()
    {
        return $this->keywordIndex;
    }

    /**
     * @param mixed $keywordIndex
     */
    public function setKeywordIndex($keywordIndex)
    {
        $this->keywordIndex = $keywordIndex;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getAcrossPagePosition()
    {
        return $this->acrossPagePosition;
    }

    /**
     * @param mixed $acrossPagePosition
     */
    public function setAcrossPagePosition($acrossPagePosition)
    {
        $this->acrossPagePosition = $acrossPagePosition;
    }

}