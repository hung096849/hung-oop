<?php
require('../dao/Database.php'); 
require('../entity/Product.php');
require('../entity/Category.php');
require('../entity/Accessotion.php');

class DatabaseDemo extends Database
{
    /**
     * Insert row to Table
     * @param string $name
     * @param object $row
     * @return void
     */
    public function insertTableTest(string $name, object $row)
    {
        $this->insertTable($name, $row);
    }

    /**
     * Select all row from Table
     * @param string $name
     * @return mixed
     */
    public function selectTableTest(string $name, int $whereId=null)
    {
        return $this->selectTable($name, $whereId);
    }

    /**
     * Update row from Table by ID
     * @param string $name
     * @param object $row
     * @return void
     */
    public function updateTableTest(string $name, object $row)
    {
        $this->updateTable($name, $row);
    }

    /**
     * Delete row from Table by ID
     * @param string $name
     * @param object $row
     * @return void
     */
    public function deleteTableTest(string $name, object $row)
    {
        $this->deleteTable($name, $row);
    }

    /**
     * Delete all row from Table
     * @param string $name
     * @return void
     */
    public function truncateTableTest(string $name)
    {
        $this->truncateTable($name);
    }

    /**
     * Update row from Table by ID
     * @param int $id
     * @param object $row
     * @return void
     */
    public function updateTableByIdTest(int $id, object $row)
    {
        $this->updateTableById($id, $row);
    }

    /**
     * Init row to Table
     * @param string $name
     * @param object $row
     * @return void
     */
    public function initDatabase()
    {
        
        for($i = 1; $i<=10 ; $i++)
        {
            $product = new Product($i, 'Snack '.$i, 2);
            $this->insertTable('productTable', $product);

            $category = new Category($i, 'Danh mục '.$i);
            $this->insertTable('categoryTable', $category);

            $accessotion = new Accessotion($i, 'Accessotion '.$i);
            $this->insertTable('accessotionTable', $accessotion);
        }
    }

}



$database = DatabaseDemo::getInstants('DatabaseDemo');

$database->initDatabase();
echo '<pre>';

$database->insertTableTest('productTable',$product);
$database->updateTableTest('productTable',$product);
$database->deleteTableTest('productTable',$product);
$database->truncateTableTest('productTable');
$database->updateTableByIdTest('productTable', $product);

print_r($database->selectTableTest('categoryTable'));
print_r($database->selectTableTest('accessotionTable'));
print_r($database->selectTableTest('productTable'));

echo strtolower(get_class($database)).'Table';
