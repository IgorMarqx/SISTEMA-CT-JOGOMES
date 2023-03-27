<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <?php $render('headerSystem') ?>

    <div class="alerts">
        <?php if (isset($_SESSION['true'])) : ?>
            <span class="alert alert-success" role="alert">
                <?php
                echo $_SESSION['true'];
                unset($_SESSION['true']);
                ?>
            </span>
        <?php endif; ?>

        <?php if (isset($_SESSION['false'])) : ?>
            <span class="alert alert-danger" role="alert">
                <?php
                echo $_SESSION['false'];
                unset($_SESSION['false']);
                ?>
            </span>
        <?php endif; ?>
    </div>
    
    <div class="logo">
        <img width="170px" src="<?= $base ?>/assets/imgs/logo." alt="">
    </div>

    <div class="center">
        <div class="container">
            <div class="form">
                <form class="row g-3" action="<?= $base ?>/registerAction" method="post">

                    <div class="personal">
                        <h2>Dados de login</h2>
                    </div>

                    <?php if (isset($_SESSION['login'])) : ?>
                        <span class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                            ?>
                        </span>
                    <?php endif; ?>

                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Nome de usuário</label>
                        <input value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" name="usuario" placeholder="Informe um nome" type="text" class="form-control" id="inputEmail4">
                    </div>


                    <div class="col-md-3">
                        <label for="inputPassword4" class="form-label">Senha do aluno</label>
                        <div class="input-group mb-2">
                            <input id="pass" name="senha" type="password" class="form-control" placeholder="Informe uma senha">
                            <span class="input-group-text"><img onclick="eyeClick()" id="eye" src="<?= $base ?>/assets/imgs/eye-open.svg" width="20px" alt=""></span>
                        </div>
                    </div>


                    <div class="personal">
                        <h2>Dados Pessoais</h2>
                    </div>

                    <?php if (isset($_SESSION['personal'])) : ?>
                        <span class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['personal'];
                            unset($_SESSION['personal']);
                            ?>
                        </span>
                    <?php endif; ?>

                    <div class="col-md-4">
                        <label for="aluno" class="form-label">Nome do aluno</label>
                        <input name="aluno" autofocus placeholder="Informe um nome" type="text" class="form-control" id="aluno">
                    </div>
                    <div class="col-md-2">
                        <label for="date" class="form-label">Data de nascimento</label>
                        <input name="nascimento" id="date" placeholder="DD/MM/YYYY" type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="cpf" class="form-label">CPF</label>
                        <input name="cpf" id="cpf" type="text" class="form-control" placeholder="000.000.000-00">
                    </div>
                    <div class="col-4">
                        <label for="telefone" class="form-label">E-mail</label>
                        <input name="email" type="text" class="form-control" placeholder="Informe um e-mail">
                    </div>
                    <div class="col-2">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input name="telefone" id="telefone" type="text" class="form-control" placeholder="(00) 90000-0000">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Nome do responsável <span class="error">(caso seja de menor)</span></label>
                        <input name="responsavel" type="text" class="form-control" id="inputCity" placeholder="Campo não obrigatório!">
                    </div>

                    <div class="col-md-2 ct">
                        <div class="title mb-3">
                            <label>Qual o CT?</label>
                        </div>

                        <input name="praia" class="form-check-input" type="checkbox" value="praia">
                        <label for="">Praia</label>

                        <input name="ernani" class="form-check-input" type="checkbox" value="ernani">
                        <label for="">Ernani sátiro</label>
                    </div>

                    <div class="col-md-4">
                        <label for="horario" class="form-label">Horário</label>
                        <input name="horario" id="horario" type="text" class="form-control" placeholder="00:00">
                    </div>

                    <div class="col-md-2">
                        <label for="mensalidade" class="form-label">Informe o valor da mensalidade</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R$</span>
                            <input name="mensalidade" id="mensalidade" type="text" class="form-control" placeholder="00,00">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="mensalidade" class="form-label">Dia do Pagamento</label>
                        <input name="dataPagamento" id="dataPagamento" type="text" class="form-control" placeholder="Informe o dia">
                    </div>


                    <div class="d-grid gap-2">
                        <input class="btn-sub" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#date').mask('00/00/0000');
        $('#dataPagamento').mask('00');
        $('#cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('#telefone').mask('(00) 00000-0000');
        $('#horario').mask('00:00');
        $('#mensalidade').mask("#.###,00", {
            reverse: true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="<?= $base ?>/assets/js/registro.js"></script>
</body>

</html>