<?php
require_once('./../abstract/BaseDao.php');
require('./../enity/Category.php');
class CategoryDao extends BaseDao
{
    public function insert($row){
        return $this->database->insertTable('categoryTable', $row);
    }
    public function update($row){
        return $this->database->updateTable('categoryTable', $row);

    }
    public function delete($row){
        return $this->database->deleteTable('categoryTable', $row);

    }
    public function findAll($name){
        return $this->database->selectTable('categoryTable');

    }
    public function findById($name){
        return $this->database->getTableByName('categoryTable', $name);
    }
}
