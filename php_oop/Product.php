<?php
class Product
{
  // public properties can be accessed
  // outside of the Product class.
  public $name;
  public $price;

  public function display_product_info()
  {
    return "Product name: {$this->name} || Product price: {$this->price}";
  }
}

$instance_product1 = new Product; // instantiating $instance_product1 object
$instance_product1->name = 'Notebook'; // accessing property
$instance_product1->price = '20';
echo $instance_product1->display_product_info();
?>