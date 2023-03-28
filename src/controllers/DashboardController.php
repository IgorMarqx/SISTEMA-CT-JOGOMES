<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Registro;


class DashboardController extends Controller
{
    public function dashboard()
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
        $masculino = Registro::select()->where('genero', 'masculino')->count('genero');
        $feminino = Registro::select()->where('genero', 'feminino')->count('genero');
        $total = Registro::select()->count('genero');

        $this->render('dashboard', [
            'masculino' => $masculino,
            'feminino' => $feminino,
            'total' => $total,
        ]);
    }

    public function dashboardGraficos()
    {

    }
}
