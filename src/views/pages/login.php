<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>LOGIN - ADMIN</title>
</head>

<body class="overflow">
        <?php if (isset($_SESSION['connect'])) : ?>
            <div style="text-align: center;" class="alert alert-warning" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i>

                <?php
                echo $_SESSION['connect'];
                unset($_SESSION['connect']);
                ?>
            </div>
        <?php endif; ?>
        <a class="home" href="<?= $base ?>/"><i class="fa-solid fa-house"></i></a>
    </div>

    <div class="center">
        <div class="container">
            <div class="form">
                <div class="logo mb-3">
                    <img width="150px" src="<?= $base ?>/assets/imgs/" alt="">
                </div>
                <form action="<?= $base ?>/login" method="post">
                    <?php if (isset($_SESSION['msg'])) : ?>
                        <div class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i>

                            <?php
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="floatingInput">Usuário <span>*</span></label>
                        <input name="usuario" autofocus type="text" class="form-control" id="floatingInput" placeholder="Informe seu usuário">
                    </div>
                    <div class="">
                        <label for="floatingPassword">Senha <span>*</span></label>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control" placeholder="Informe sua senha" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"></span>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <input class="btn btn-warning" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>