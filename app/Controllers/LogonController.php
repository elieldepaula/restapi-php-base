<?php

namespace App\Controllers;

/**
 * LogonController class.
 *
 * NOTA: Este controller é um exemplo.
 *
 * @author Eliel de Paula <elieldepaula@gmail.com>
 */
class LogonController extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    public function listUsers()
    {

        $user = new \App\Models\UserModel;
        $output = [];
        foreach ($user::all() as $row) {

            $output[] = ['id' => $row->id, 'email' => $row->email];
        }

        $this->response(200, $output);
    }

    public function newUser()
    {

        $user = new \App\Models\UserModel;
        $user->name = $this->input('name');
        $user->email = $this->input('email');
        $user->password = $this->input('password');

        if ($user->save())
            $this->response(200, ['status' => 200, 'message' => 'Cadastro com sucesso.', 'output' => $user]);
        else
            $this->response(201, ['status' => 201, 'message' => 'Erro no cadastro.']);

    }

    public function updateUser($id)
    {

    }

    public function delUser($id)
    {
        $user = new \App\Models\UserModel;
        if ($user->get($id)->delete())
            $this->response (200, ['status' => 200, 'message' => 'Usuário excluído com sucesso.']);
        else
            $this->response (401, ['status' => 401, 'message' => 'Erro ao excluir o usuário.']);
    }

}
