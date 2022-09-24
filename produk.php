<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
public function getProductname()
{
    return $this->product_name;
}
public function getProductprice()
{
    return $this->product_price;
}
public function getProductdiscount()
{
    return $this->product_discount/100;
}
public function getProductextradiscount()
{
    return $this->product_price - ($this->product_discount / 100) * $this->product_price - (5/100);
}
public function getProductotal()
{
    return $this->product_price - ($this ->productdiscount / 100) * $this->product_price;
}
}
$newproduct = new product ( 'HnM' , 2000, 10);
echo $newproduct->getProductname();
echo "<br>";
echo $newproduct->getProductprice();
echo "<br>";
echo 'discount'." ". '10%'. " ". '+ 5%';
echo "<br>";
echo 'total'." ". $newproduct->getProductextradiscount();
?>
</body>
</html>