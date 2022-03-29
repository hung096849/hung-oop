<?php
require('../dao/AccessoryDao.php');
class AccessoryDaoDemo extends AccessoryDao
{
    /**
     * Test insert row to accessory table
     * 
     * @param $row
     * @return array
     */
    public function insertTest($row)
    {
        $this->insert($row);
    }

    /**
     * Test select row from accessory table
     * 
     * @param $row
     * @return array
     */
    public function selectTest($row)
    {
        print_r($this->selectTest($row));
    }

    /**
     * Test update row to accessory table
     * 
     * @param $row
     * @return array
     */
    public function updateTest($row)
    {
        print_r($this->update($row));
    }

    /**
     * Test delete row to accessory table
     * 
     * @param $row
     * @return array
     */
    public function deleteTest($row)
    {
        print_r($this->delete($row));
    }
}

$accessoryDaoDemo = new AccessoryDaoDemo();
$accessory = new Accessotion(3, 'Noodles', 'sweet');
$accessory2 = new Accessotion(2, 'Snack', 'nice');
$accessoryDaoDemo->insertTest($accessory);
$accessoryDaoDemo->selectTest($accessory);
$accessoryDaoDemo->updateTest($accessory2);
$accessoryDaoDemo->deleteTest($accessory);
