<?php
require_once('./../abstract/BaseDao.php');
require './../enity/Product.php';

class ProductDao extends BaseDao{
    public function findByName($name)
    {
        return $this->database->getTableByName('productTable', $name);
    }

    public function search()
    {
        return $this->database->selectTable('productTable');
    }
    public function insert($row){
        return $this->database->insertTable('productTable', $row);
    }
    public function update($row){
        return $this->database->updateTable('productTable', $row);

    }
    public function delete($row){
        return $this->database->deleteTable('productTable', $row);

    }
    public function findAll($name){
        return $this->database->selectTable('productTable');

    }
    public function findById($name){
        return $this->database->getTableByName('productTable', $name);
    }
   
}