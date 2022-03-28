<?php
require_once('./../interface/IDao.php');
require_once('./../dao/Database.php');
require_once('./../entity/Product.php');
require_once('./../entity/Category.php');
require_once('./../entity/Accessotion.php');

abstract class BaseDao implements IDao
{
    protected $database;

    public function __construct()
    {
        $this->database = Database::getInstants();
    }

    /**
     * Get name table from param row
     * @param object $row
     * @return string
     */
    public function getTableName(object $row)
    {
        return strtolower(get_class($row)).'Table';
    }

    /**
     * Insert row to productTable
     * @param object $row
     * @return void
     */
    public function insert(object $row)
    {
        $this->database->insertTable($this->getTableName($row), $row);
    }

    /**
     * Update row productTable by ID
     * @param object $row
     * @return void
     */
    public function update(object $row)
    {
        $this->database->updateTable($this->getTableName($row), $row);
    }  

    /**
     * delete row from productTable by ID
     * @param object $row
     * @return void
     */
    public function delete(object $row)
    {
        $this->database->deleteTable($this->getTableName($row), $row);
    }

    /**
     * Select All row productTable
     * @return mixed
     */
    public function findAll(string $name)
    {
        return $this->database->selectTable($name);
    }

    /**
     * Select row by ID productTable
     * @return mixed
     */
    public function findById(string $name)
    {
        return $this->database->selectTable($name);
    }

    public function initDatabase()
    {
        for($i = 1; $i<=10 ; $i++)
        {
            $product = new Product($i, 'IPHONE '.$i, 2);
            $this->insert($product);

            $category = new Category($i, 'Danh mục '.$i);
            $this->insert($category);

            $accessotion = new Accessotion($i, 'Accessotion '.$i);
            $this->insert($accessotion);
        }
    }

}
