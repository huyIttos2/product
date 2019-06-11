<?php


class SanPham
{
    public $name;
    public $price;
    public $sale;
    public $mount;
    public function __construct($name,$price,$mount,$sale)
    {
        $this->name=$name;
        $this->price=$price;
        $this->sale=$sale;
        $this->mount=$mount;
    }

    /**
     * @param mixed $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    /**
     * @return mixed
     */
    public function getSale()
    {
        return $this->sale;
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
    public function getPrice()
    {
        return $this->price;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $mount
     */
    public function setMount($mount)
    {
        $this->mount = $mount;
    }

    /**
     * @return mixed
     */
    public function getMount()
    {
        return $this->mount;
    }
}