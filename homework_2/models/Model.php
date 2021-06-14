<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    public $sql;
    protected $db;
    abstract protected function table();

    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function __get($name) {
        if(isset($this->$name)) return $this->$name;
    }
    public function __set($name, $value) {
        if(!isset($this->$name)) {
            return 'Такого свойства не существует';
        } else {
            $this->$name = $value;
        }
    }
    public function getOne($id) {
        $sql = "SELECT * FROM {$this->table()} WHERE id = {$id}";

        return $this->db->queryAll($sql);
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->table()}";
        $this->sql = $this->db->queryAll($sql);
        return $this;
    }

    public function where() {
        $this->sql .= " where name = Danil";
        return $this->db->queryWhere($this->sql);
    }
    public function insert() {

    }

    public function update() {

    }

    public function delete() {

    }

}