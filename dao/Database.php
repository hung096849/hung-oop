<?php

class Database
{
    public $productTable = array();
    public $categoryTable = array();
    public $accessotionTable = array();
    protected static $instants = null;

    /**
     * get Database instant
     * @param $className
     * @return $instants
     */
    public static function getInstants($className = 'Database')
    {
        if(empty(self::$instants))
        {
            return self::$instants = new $className();
        }
        return self::$instants;
    }

    /**
     * insert row to table
     * @param  $name
     * @param  $row
     * @return bolean
     */
    public function insertTable($name, $row)
    {
        if(is_subclass_of($row, 'BaseRow'))
        {
            $this->{$name}[] = $row;
            return 1;
        }

        return 0;
    }

    /**
     * select all row or by ID in table
     * @param  $name
     * @param  $whereId
     * @return mixed
     */
    public function selectTable($name, $whereId = null)
    {
        if(!empty($whereId))
        {
            foreach($this->{$name} as $value)
            {
                return $value;
            }
        }
        return $this->{$name};
    }

    /**
     * Update row on table by ID
     * @param  $name
     * @param  $row
     * @return bolean
     */
    public function updateTable($name,  $row)
    {
        if(is_subclass_of($row, 'BaseRow'))
        {
            foreach ($this->{$name} as $key=>$value)
            {
                if($this->{$name}[$key]->getId() == $row->getId())
                {
                    $this->{$name}[$key] = $row;
                }
            }
            return 1;
        }

        return 0;
    }

    /**
     * Delete row on table by ID
     * @param  $name
     * @param  $row
     * @return bolean
     */
    public function deleteTable($name, $row)
    {
        if(is_subclass_of($row, 'BaseRow'))
        {
            foreach ($this->{$name} as $key=>$value)
            {
                if($this->{$name}[$key]->getId() == $row->getId())
                {
                    unset($this->{$name}[$key]);
                }
            }
            return 1;
        }
        return 0;
    }

    /**
     * Delete all row on table
     * @param $name
     * @return void
     */
    public function truncateTable($name)
    {
        $this->{$name} = array();
    }

    /**
     * Update row on table by ID
     * @param  $name
     * @param  $row
     * @return bolean
     */
    public function updateTableById($id, $row)
    {
        if(is_subclass_of($row, 'BaseRow'))
        {
            switch(get_class($row))
            {
                case 'Product' :
                    foreach($this->productTable as $key=>$product)
                    {
                        if($product->getId() == $id)
                        {
                            $this->productTable[$key] = $row;
                        }
                    }
                    break;
                case 'Category' :
                    foreach($this->categoryTable as $key=>$category)
                    {
                        if($category->getId() == $id)
                        {
                            $this->categoryTable[$key] = $row;
                        }
                    }
                    break;
                case 'Accessotion' :
                    foreach($this->accessotionTable as $key=>$accessotion)
                    {
                        if($accessotion->getId() == $id)
                        {
                            $this->accessotionTable[$key] = $row;
                        }
                    }
                    break;
            }
            return 1;
        }
        return 0;
    }

    /**
     * Get row on table by Name
     * @param  $nameTable
     * @param  $name
     * @return mixed
     */
    public function getTableByName($nameTable, $name)
    {
        foreach($this->{$nameTable} as $row)
        {
            if($row->getName() == $name)
            {
                return $row;
            }
        }
        return 0;
    }

}
