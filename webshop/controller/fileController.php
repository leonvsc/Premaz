<?php
require_once "../data/productData.php";
require_once "../model/productModel.php";
require_once "../controller/productController.php";

class fileController
{
    private $data;
    private $controller;

    public function __construct()
    {
        $this->data = new productData();
        $this->controller = new productController();
    }

    public function checkProductExistence($productArray)
    {
        $existingProducts = $this->controller->readAll();

        foreach ($productArray as $product) {

            foreach ($existingProducts as $exists) {
                if ($product[0] == $exists->getSKU())
                    return true;
            }

            return false;
        }
    }
    // Een functie welke zorgt voor de import van het csv bestand
    public function import($file)
    {
        $csvFile = fopen($file, "r") or die("File not found");
        $productArray = array(); //empty array

        while (!feof($csvFile)) {
            while (($row = fgetcsv($csvFile, 0)) !== FALSE) {
                array_push($productArray, $row);
            }
        }

        $existingProducts = $this->controller->readAll();
        $exists = $this->checkProductExistence($productArray);

        foreach ($productArray as $product) {

            if ($exists == false) {
                $productModel = new productModel($product[0], $product[1], $product[2], $product[3], $product[4]);
                $this->data->create($productModel);
            }
        }


        try {
            if ($exists == false) {
                echo "<div class='alert alert-success'>Products has been added to the database.</div>";
            } else {
                echo "<div class='alert alert-warning'>Product is already in the database.</div>";
            }
        } catch (createException $e) {
            echo $e->getMessage();
        }
    }
}
