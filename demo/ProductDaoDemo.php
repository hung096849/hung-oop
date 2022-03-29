<?php
require '../dao/ProductDao.php';
require '../enity/Product.php';
$database = new ProductDao();

for($i=1; $i<=10 ; $i++)
{
    $product = new Product($i, 'Noodles '.$i, 2);
    $database->insert($product);

}

$product = new Product(12, 'Snack', 3);

$database->insert($product);
// $database->update($product);
// $database->delete($product);

echo '<pre>';
print_r($database->findAll('productTable'));

// print_r($database->findById('productTable', 3));
// print_r($database->findByname('Snack'));
// print_r($database->search());
