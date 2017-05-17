<?php

/**
 * Created by PhpStorm.
 * User: maveriks
 * Date: 15/5/17
 * Time: 11:54
 */
class Product {

    private $id;
    private $prodName;
    private $partNum;
    private $price;
    private $state;

    public function __construct($id, $prodName, $partNum, $price, $state)
    {
        $this->id = $id;
        $this->prodName = $prodName;
        $this->partNum = $partNum;
        $this->price = $price;
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * @param mixed $prodName
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;
    }

    /**
     * @return mixed
     */
    public function getPartNum()
    {
        return $this->partNum;
    }

    /**
     * @param mixed $partNum
     */
    public function setPartNum($partNum)
    {
        $this->partNum = $partNum;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


}