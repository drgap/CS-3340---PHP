<?php
class Order {
    private $customer_name;
    private $products = array();

    function __construct($customer_name) {
        $this->customer_name = $customer_name;
    }
    function getCustomerName() {
        return $this->customer_name;
    }
    function addProduct(Product $product) {
        array_push($this->products, $product);
    }
    function getProduct($index) {
        return $this->products[$index];
    }
    function totalCost() {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }
    // Just to illustrate indexed loop
    function totalCost2() {
        $sum = 0;
        for($i = 0; $i < count($this->products); $i++) {
            $sum += $this->products[$i]->getPrice();
        }
        return $sum;
    }
    function getNumberOfProducts() {
        return count($this->products);
    }
}
?>
