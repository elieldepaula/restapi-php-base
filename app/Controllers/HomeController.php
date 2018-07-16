<?php

namespace App\Controllers;

class HomeController extends \App\Controllers\BaseController
{
    
    function __construct()
    {
        parent::__construct();
    }
    public function index($nome = '', $sobrenome = '')
    {
        echo "Bem vindo a API. " . $nome . ' ' . $sobrenome;
    }
    
    public function lista_usuarios()
    {
        $user = new \App\Models\User;
        $output = [];
        foreach ($user::all() as $row) {
            
            $output[] = ['id' => $row->id, 'nome' => $row->name];
        }
        
        $this->response(200, $output);
        
    }
    
    public function cadastra_usuario()
    {

        $user = new \App\Models\User;
        $user->name = $this->input('name');
        $user->email = $this->input('email');
        $user->password = $this->input('password');
        
        if ($user->save())
            $this->response(200, ['status' => 200, 'message' => 'Cadastro com sucesso.', 'output' => $user]);
        else
            $this->response(201, ['status' => 201, 'message' => 'Erro no cadastro.']);
        
    }
    
    public function deleta_usuario($id)
    {
        $user = new \App\Models\User;
        if ($user->get($id)->delete())
            $this->response (200, ['status' => 200, 'message' => 'Usuário excluído com sucesso.']);
        else 
            $this->response (401, ['status' => 401, 'message' => 'Erro ao excluir o usuário.']);
    }
    
}