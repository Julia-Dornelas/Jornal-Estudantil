<?php

require_once "../../models/CategoriasModel.php";

class CategoriasController {

    private $model;

    function __construct()
    {
        $this->model = new CategoriasModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add($c) {
        return $this->model->create($c);
    }

    public function edit($c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}