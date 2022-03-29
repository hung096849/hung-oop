<?php
require('../dao/CategoryDao.php');
class CategoryDaoDemo extends CategoryDao
{
    /**
     * Test insert row to Category table
     * 
     * @param $row
     * @return array
     */
    public function insertTest($row)
    {
        $this->insert($row);
    }

    /**
     * Test select row from category table
     * 
     * @param $row
     * @return array
     */
    public function selectTest($row)
    {
        print_r($this->findById($row));
    }

    /**
     * Test update row to category table
     * 
     * @param $row
     * @return array
     */
    public function updateTest($row)
    {
        print_r($this->update($row));
    }

    /**
     * Test delete row to category table
     * 
     * @param $row
     * @return array
     */
    public function deleteTest($row)
    {
        print_r($this->delete($row));
    }
}

$category = new Category(1, 'iphone');
$category1 = new Category(2, 'samsung');
$categoryDaoDemo = new CategoryDaoDemo();
$categoryDaoDemo->insertTest($category);
$categoryDaoDemo->selectTest($category);
$categoryDaoDemo->updateTest($category1);
$categoryDaoDemo->deleteTest($category1);
