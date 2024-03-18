<?php

namespace App\Models;
use App\Core\Model;
class UsersModel extends Model
{
    public function tableFill()
    {
        return 'users';
    }

    public function fieldFill()
    {
        return '*';
    }

    public function primaryKey()
    {
        return 'id';
    }
}