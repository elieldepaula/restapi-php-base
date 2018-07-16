<?php

namespace App\Models;
use Phormium\Model;

class BaseModel extends Model
{
    function __construct()
    {
        //echo BASE_PATH . 'database.json';
        //Phormium\DB::configure(BASE_PATH . 'database.json');
    }
}