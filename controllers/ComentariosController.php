<?php

require_once "../../models/ComentariosModel.php";

class ComentariosController {

    private $model;

    function __construct()
    {
        $this->model = new ComentariosModel();
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