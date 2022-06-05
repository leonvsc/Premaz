<?php
require_once "../data/productData.php";
require_once "../model/productModel.php";

class fileController
{
    private $data;

    public function __construct()
    {
        $this->data = new productData();
    }

    public function import($file)
    {
        $tFile = fopen($file, "r") or die("File not found"); //get file or throw message
        $ar = array(); //empty array

        while (!feof($tFile)) {
            while (($row = fgetcsv($tFile, 0)) !== FALSE) {
                array_push($ar, $row); //pushes every row as array element
            }
        }

        foreach ($ar as $product) { //add student for ever array element
            $productModel = new productModel($product[0], $product[1], $product[2], $product[3]);
            $this->data->create($productModel);
        }
    }
}
