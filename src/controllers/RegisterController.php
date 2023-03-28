<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Registro;

class RegisterController extends Controller
{
    public function register()
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

        $this->render('registro');
    }

    public function registerAction()
    {

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT, FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (empty($dados['usuario'])) {
            $_SESSION['login'] = "Atenção, Campo usuário vazio! Preencha";
            $this->redirect('/register');
        } else if (empty($dados['senha'])) {
            $_SESSION['login'] = "Atenção, Campo senha vazio! Preencha";
            $this->redirect('/register');
        } else if (empty($dados['aluno'])) {
            $_SESSION['personal'] = "Atenção, Campo nome do aluno vazio! Preencha";
            $this->redirect('/register');
        } else if (empty($dados['nascimento']) || strlen($dados['nascimento']) < 10) {
            $_SESSION['personal'] = "Atenção, Campo nascimento vazio ou de forma inválida! Preencha";
            $this->redirect('/register');
        } else if (empty($dados['cpf']) || strlen($dados['cpf']) < 14) {
            $_SESSION['personal'] = "Atenção, Campo cpf vazio ou de forma inválida! Preencha";
            $this->redirect('/register');
        } else if (empty($email)) {
            $_SESSION['personal'] = "Atenção, Campo email vazio ou de forma inválida! Verifique se possui o (@gmail.com)";
            $this->redirect('/register');
        } else if (empty($dados['telefone']) || strlen($dados['telefone']) < 15) {
            $_SESSION['personal'] = "Atenção, Campo telefone vazio ou de forma inválida!";
            $this->redirect('/register');
        } else if ($dados['ct'] == 'Selecione um CT' || $dados['ct'] == '') {
            $_SESSION['personal'] = "Atenção, Preencha um dos campos (Praia ou Ernani)";
            $this->redirect('/register');
        } else if ($dados['genero'] == 'Informe um gênero' || $dados['genero'] == '') {
            $_SESSION['personal'] = "Atenção, Preencha um dos campos (Masculino ou Feminino)";
            $this->redirect('/register');
        } else if (empty($dados['horario']) || strlen($dados['horario']) < 5) {
            $_SESSION['personal'] = "Atenção, Campo Horário vazio ou de forma incorreta!";
            $this->redirect('/register');
        } else if (empty($dados['mensalidade'])) {
            $_SESSION['personal'] = "Atenção, Campo Mensalidade vazio!";
            $this->redirect('/register');
        } else if ($dados['dataPagamento'] > 31) {
            $_SESSION['personal'] = "Atenção, Data de pagamento tem que ser entre dia 01 a dia 31!";
            $this->redirect('/register');
        } else {
            $db = Registro::insert([
                'usuario' => $dados['usuario'],
                'senha' => $dados['senha'],
                'aluno' => $dados['aluno'],
                'nascimento' => $dados['nascimento'],
                'cpf' => $dados['cpf'],
                'email' => $dados['email'],
                'telefone' => $dados['telefone'],
                'responsavel' => $dados['responsavel'],
                'ct' => $dados['ct'],
                'genero' => $dados['genero'],
                'horario' => $dados['horario'],
                'mensalidade' => $dados['mensalidade'],
                'dataPagamento' => $dados['dataPagamento']
            ])->execute();

            if (empty($db)) {
                $_SESSION['true'] = "Aluno cadastrado com sucesso!";
                $this->redirect('/register');
            } else {
                $_SESSION['false'] = "Falha ao cadastrar aluno!";
                $this->redirect('/register');
            }
        }
    }
}
