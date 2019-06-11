<?php
include 'savefileJson.php';

class Product extends savefileJson
{

  public function __construct($name, $price, $mount, $sale, $filename)
  {
      parent::__construct($name, $price, $mount, $sale, $filename);
  }

    public function getData($filename)
    {
        // TODO: Implement getData() method.
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;

    }

    public function saveData($filename)
    {
        // TODO: Implement saveData() method.


            try {
                $product = array(
                    'name' => $this->name,
                    'price' => $this->price,
                    'sale' => $this->sale,
                    'mount' => $this->mount

                );
                // converts json data into array
                $arr_data = $this->getData($filename);
                // Push user data to array
                array_push($arr_data, $product);
                //Convert updated array to JSON
                $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                //write json data into data.json file
                file_put_contents($filename, $jsondata);
                echo "Lưu dữ liệu thành công!";
            } catch (Exception $e) {
                echo 'Lỗi: ', $e->getMessage(), "\n";
            }

    }
}
$product1 = new Product('samsung',12,34,0.5,'data.json');
var_dump($product1 ->saveData($product1->filename));
echo "<br>";
var_dump($product1->getData($product1->filename));