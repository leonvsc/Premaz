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
        $csvFile = fopen($file, "r") or die("File not found");
        $productArray = array(); //empty array

        while (!feof($csvFile)) {
            while (($row = fgetcsv($csvFile, 0)) !== FALSE) {
                array_push($productArray, $row);
            }
        }

        foreach ($productArray as $product) {
            $productModel = new productModel($product[0], $product[1], $product[2], $product[3]);
            $insert = $this->data->create($productModel);
        }

        // TODO: Check of deze data al in de database staat.

        try {
            if ($insert == true) {
                echo "<div class='alert alert-success'>Products has been added to the database.</div>";
            } else {
                throw new createException("Importing failed");
            }
        } catch (createException $e) {
            echo $e->getMessage();
        }
    }
}
