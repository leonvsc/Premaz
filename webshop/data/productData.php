<?php

class productData implements ICrudData
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAll()
    {
    }
    public function getById($id)
    {
    }
    public function create($data)
    {
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
    public function objectToModel($object)
    {
    }
}
