<?php
require_once('./../abstract/BaseRow.php');
class Accessotion extends BaseRow{
    private int $id;
    public string $name;

    public function setId($id){
        $this->id = $id;
     }
     public function getid(){
        return  $this->id;
     }
}
