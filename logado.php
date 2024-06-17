<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilha de Treino</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_logado.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <a class="navbar-brand " href="#" >Planilha de Treino</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-primary mx-1" href="#criar">Criar Planilha</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary mx-1" href="#pegar">Pegar Planilha Pronta</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary mx-1" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron text-center bg-primary text-white">
        <h1 class="display-4">Bem-vindo ao Seu Treino Personalizado</h1>
        <p class="lead">Crie sua própria planilha de treino ou escolha uma pronta para começar!</p>
    </header>

    <?php

        session_start();

        $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;
        $descricao = $_SESSION['descricao'] ?? null;

        require_once "banco.php";

        $nomePlanilha = $_POST['nomePlanilha'] ?? null;
        $descricao = $_POST['descricao'] ?? null;


        if (is_null($nomePlanilha) && is_null($descricao)) {
            
        }else{

            $busca = $banco->query("SELECT * FROM planilha_personalizada WHERE nome_planilha='$nomePlanilha'");

            if($busca ->num_rows ==0){
                $_SESSION['nomePlanilha'] = $nomePlanilha;
                $_SESSION['descricao'] = $descricao;
                header("Location: planilhaPersonalizada.php");
            }else{
                echo "<script>alert('Nome de planilha já existe, por favor deigite outro nome');</script>";
            }
        }

    ?>

    <section id="criar" class="container mt-5">
        <h2 class="text-center">Criar Planilha de Treino</h2>
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome do Treino</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do seu treino" name="nomePlanilha" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" rows="3" placeholder="Descrição do treino" name="descricao"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Criar Planilha/ Adicionar Exercicio</button>
        </form>
    </section>

    <section id="pegar" class="container mt-5">
        <h2 class="text-center">Pegar Planilha Pronta</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Treino A</h5>
                        <p class="card-text">Descrição breve do Treino A.</p>
                        <a href="#" class="btn btn-primary">Selecionar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Treino B</h5>
                        <p class="card-text">Descrição breve do Treino B.</p>
                        <a href="#" class="btn btn-primary">Selecionar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Treino C</h5>
                        <p class="card-text">Descrição breve do Treino C.</p>
                        <a href="#" class="btn btn-primary">Selecionar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4 text-white">
        <p>&copy; 2024 Planilha de Treino. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
