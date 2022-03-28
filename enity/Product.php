<?php
require_once('./../abstract/BaseRow.php');
class Product extends BaseRow{
     public $categoryId;

    public function __construct(int $id, string $name, int $categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

}
