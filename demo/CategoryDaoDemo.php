<?php
require_once '../dao/CategoryDo.php';
require_once '../enity/Category.php';
$database = new CategoryDao();

for($i=1; $i<=10 ; $i++)
{
    $category = new Category($i, 'Iphone '.$i, 2);
    $database->insert($category);

}

$category = new Category(12, 'Samsung Galaxy', 3);

$database->insert($category);
$database->update($category);
$database->delete($category);

echo '<pre>';
print_r($database->findAll('categoryTable'));

print_r($database->findById('categoryTable', 2));


