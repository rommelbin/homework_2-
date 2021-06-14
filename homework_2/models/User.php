<?php

namespace app\models;

class User extends Model
{
    protected $id;
    protected $login;
    protected $pass;


    public function table()
    {
        return 'users';
    }
}