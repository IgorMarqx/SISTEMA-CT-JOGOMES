<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Admin;

class SystemController extends Controller
{

    public function systemLogin()
    {
        $this->render('login');
    }

    public function login()
    {
        $usuario = filter_input(INPUT_POST, 'usuario');
        $senha = filter_input(INPUT_POST, 'senha');

        $dados = Admin::select()->where('usuario', $usuario)->where('senha', $senha)->execute();
        if (count($dados) === 1) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $this->redirect('/dashboard');
        } else {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            $_SESSION['msg'] = "Atenção, campos vazios ou incorretos!";
            $this->redirect('/systemLogin');
        }
    }
    public function logout()
    {
        session_destroy();
        $this->redirect('/systemLogin');
    }
    public function system()
    {
        date_default_timezone_set('America/Sao_Paulo');

        if (!isset($_SESSION['usuario']) == true && !isset($_SESSION['senha']) == true) {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            $_SESSION['connect'] = "Atenção, Você precisa estar logado para acessar esse site!";
            $this->redirect('/systemLogin');
        } else {
            $logado = $_SESSION['usuario'];
        }

        $this->render('system');
    }

}
