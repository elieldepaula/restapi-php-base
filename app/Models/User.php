<?php

namespace App\Models;

class User extends BaseModel
{

    // Mapping meta-data
    protected static $_meta = array(
        'database' => 'db1',
        'table' => 'users',
        'pk' => 'id'
    );

    // Table columns
    public $id;
    public $name;
    public $email;
    public $password;
    
}