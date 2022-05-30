<?php

class accountController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new accountData();
    }

    public function create($data)
    {
    }

    public function readAll()
    {
    }

    public function read($id)
    {
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}
