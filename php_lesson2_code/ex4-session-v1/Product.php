<?php
class Product {
    private $name;
    private $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    function getName() {
        return $this->name;
    }
    function getPrice() {
        return $this->price;
    }
    // I believe there is a real toString, __toString, but didn't figure it out.
    function toString() {
        $msg = sprintf("Product name: %s, Price: $%.2f", $this->name, $this->price);
        return $msg;
    }
}
?>
