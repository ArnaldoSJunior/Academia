<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Planilha Personalizada</title>
    <link rel="stylesheet" href="styles/style_planilhaP.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="text-left text-white p-3 ">
                <h1>Planilha Personalizada</h1>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="logado.php">Voltar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php

    session_start();

    $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;


    ?>

    <div class="container-sm d-flex flex-column justify-content-center mt-5">
        <div class="container divExercicio rounded shadow">
            <form action="" method="post" class="my-4">
                <div class="input-group my-2">
                    <span class="label input-group-text ">Nome da planilha</span>
                    <p  aria-label="First name" class="form-control"><?= $nomePlanilha ?></p>
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text ">Nome do exercício</span>
                    <input type="text" aria-label="First name" class="form-control">
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text">Peso(Kg)</span>
                    <input type="number" aria-label="First name" class="form-control">
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text">nº de séries</span>
                    <input type="number" aria-label="First name" class="form-control">
                    <span class="label input-group-text">nº de repetições</span>
                    <input type="text" aria-label="Last name" class="form-control">
                </div>
                <div class="input-gruop my-2 mt-3 text-center">
                    <input type="submit" value="Adicionar" class="btn btn-outline-primary shadow">
                </div>
            </form>
        </div>

    </div>

</body>

</html>