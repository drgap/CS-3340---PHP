<?php
class TestOrder {
    private $customer_name;
    //private $products = array();

    function __construct($customer_name) {
        $this->customer_name = $customer_name;
    }

    function getCustomerName() {
        return $this->customer_name;
    }
//    function addProduct(Product $product) {
//        array_push($this->products, $product);
//    }
//    function getProduct($index) {
//        return $this->products[$index];
//    }
//    function getNumberOfProducts() {
//        return count($this->products);
//    }
}
?>
