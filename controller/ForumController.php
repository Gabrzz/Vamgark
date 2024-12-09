<?php

require_once "../../models/ForumModel.php"; 

class ForumController {

    private $model;

    function __construct()
    {
        $this->model = new ForumModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Forum $f) {
        return $this->model->create($f);
    }

    public function edit(Forum $f) {
        return $this->model->update($f);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id_forum) {
        return $this->model->delete($id_forum);
    }

}