<?php
require_once 'app/models/CrudModels.php';
class CrudControllers
{
    private $models;
    public function __construct()
    {
        $this->models = new CrudModels();
    }
    public function index()
    {
        $data = $this->models->getAll();
        include 'app/views/index.php';
    }
}
?>