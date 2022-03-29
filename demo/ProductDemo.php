<?php
require('../entity/Product.php');

class ProductDemo extends Product
{

    /**
     * Create instants Product
     * @param int $id
     * @param string $name
     * @param int $categoryId
     * return mixed
     */
    public function createProductTest(int $id, string $name, int $categoryId)
    {
        $product =  new Product($id, $name, $categoryId);
        return $product;
    }

    /**
     * Create instants Product
     * @param Product $product
     * return mixed
     */
    public function printProduct(Product $product)
    {
        echo 'Product ID: '.$product->getId().'<br/>';
        return $product;
    }
}
