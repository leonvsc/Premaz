<?php

// Een interface om alle controller klasses verplicht dezelfde functies te geven.
interface ICrudController
{
    public function create($data);
    public function readAll();
    public function read($id);
    public function update($id, $data);
    public function delete($id);
}
