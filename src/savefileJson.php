<?php
include 'SanPham.php';
abstract class SaveFileJson extends SanPham
{
    public $filename;
    public function __construct($name, $price, $mount, $sale,$filename)
    {
        parent::__construct($name, $price, $mount, $sale);
        $this->filename =$filename;
    }

    abstract public function getData($filename);
    abstract public function saveData($filename);
}