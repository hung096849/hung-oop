<?php

interface IDao
{
    /**
     * Insert row to categoryTable
     * @param object $row
     * @return void
     */
    public function insert(object $row);

    /**
     * Update row categoryTable by ID
     * @param object $row
     * @return void
     */
    public function update(object $row);

    /**
     * delete row from categoryTable by ID
     * @param object $row
     * @return void
     */
    public function delete(object $row);

    /**
     * Select All row categoryTable
     * @return mixed
     */
    public function findAll(string $name);

    /**
     * Select row by ID categoryTable
     * @return mixed
     */
    public function findById(string $name);

}
