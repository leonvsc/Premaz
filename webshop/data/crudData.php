<?php

// Een interface om alle data klasses verplicht dezelfde functies te geven.
interface ICrudData
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
    public function arrayToModelArray($object);
}
