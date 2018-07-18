<?php

namespace App\Models;

/**
 * BaseModel class.
 *
 * @author Eliel de Paula <elieldepaula@gmail.com>
 */
class UserModel extends BaseModel
{

    // Mapping meta-data
    protected static $_meta = array(
        'database' => ENVIRONMENT,
        'table' => 'users',
        'pk' => 'id'
    );

    // Table columns
    public $id;
    public $name;
    public $email;
    public $password;
    
}