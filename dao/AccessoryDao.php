<?php
require '../enity/Accessory.php';
require './Database.php';
class ProductDao extends BaseDao{
    public function findByName($name)
    {
        return $this->database->getTableByName('accessoryTable', $name);
    }

    public function search()
    {
        return $this->database->selectTable('accessoryTable');
    }               
    public function insert($row){
        return $this->database->insertTable('accessoryTable', $row);
    }
    public function update($row){
        return $this->database->updateTable('accessoryTable', $row);

    }
    public function delete($row){
        return $this->database->deleteTable('accessoryTable', $row);

    }
    public function findAll($name){
        return $this->database->selectTable('accessoryTable');

    }
    public function findById($name){
        return $this->database->getTableByName('accessoryTable', $name);
    }
   
}