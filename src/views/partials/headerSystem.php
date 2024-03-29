<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/system.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>CT - SISTEMA</title>
</head>

<body>

    <div class="container">
        <div class="logo">
            <h1><span>CT</span> Jô Gomes</h1>
        </div>

        <div class="logout">
            <div class="dashboard">
                <a id="dashboard" class="dropdown-item" href="<?= $base ?>/dashboard"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                <a id="listagem" class="dropdown-item" href="<?= $base ?>/system"><i class="fa-brands fa-readme"></i> Listagem</a>
                <a id="cadastro" class="dropdown-item" href="<?= $base ?>/register"><i class="fa-solid fa-user"></i> Cadastrar</a>
                <a class="dropdown-item" href="<?= $base ?>/"><i class="fa-solid fa-house"></i> Home</a>
                <a class="dropdown-item" href="<?= $base ?>/logout"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sair</a>
            </div>
        </div>
    </div>

    <script src="<?=$base?>/assets/js/activeNav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>