<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class User extends Model
=======
use Illuminate\Database\Eloquent\model;

class User extends Model
{
    //Table Name
    protected  $table = 'users';
    
    //primary key
    protected $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}


class User extends Authenticatable
>>>>>>> 08d82af076ba602310a00869f283edad55e9c3e6
{
    /*
    public $name = 'test';
    public $password = 'testPassword';
    public $email = 'testEmail';*/
}
