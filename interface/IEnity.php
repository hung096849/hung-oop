<?php
interface IEnity
{
    public function getId();
   

    /**
     * Get Name by Row
     * @return string
     */
    public function getName();
  

    /**
     * Set Id for Row
     * @return void
     */
    public function setId(int $id);
    

}
