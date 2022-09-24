<?php
class product
{
    private $product_name;
    private $product_price;
    private $product_discount;

public function __construct($product_name, $product_price, $product_discount)
{
    $this->product_name = $product_name;
    $this->product_price = $product_price;
    $this->product_discount = $product_discount;
}
}
?>