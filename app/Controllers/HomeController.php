<?php

namespace App\Controllers;

/**
 * initial controller class.
 *
 * @author Eliel de Paula <elieldepaula@gmail.com>
 */
class HomeController extends BaseController
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        echo "Bem vindo a API.";
    }
    
}