<?php
require_once('./../interface/IEnity.php');

abstract class BaseRow implements IEnity 
{
    protected $id;
    protected $name;

    public function __construct(int $id, string $name)
    {
       $this->id = $id;
       $this->name = $name;
    }

    /**
     * Get ID by Row
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get Name by Row
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Id for Row
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}
