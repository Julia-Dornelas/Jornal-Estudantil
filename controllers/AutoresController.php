<?php

require_once "../../models/AutoresModel.php";

class AutoresController {

    private $model;

    function __construct()
    {
        $this->model = new AutoresModel();
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