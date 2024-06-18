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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand " href="#">Planilha de Treino</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-primary mx-1" href="mostrarPlanilhas.php  ">Mostrar Planilhas</a>
                </li>
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
        <h1 class="display-4">Bem-vindo aos Treinos </h1>
        <p class="lead">Personalise seu próprio treino ou escolha um pronto para começar!</p>
    </header>

    <?php

    session_start();

    $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;
    $descricao = $_SESSION['descricao'] ?? null;

    require_once "banco.php";

    $nomePlanilha = $_POST['nomePlanilha'] ?? null;
    $descricao = $_POST['descricao'] ?? null;


    if (is_null($nomePlanilha) && is_null($descricao)) {
    } else {

        $busca = $banco->query("SELECT * FROM planilha_personalizada WHERE nome_planilha='$nomePlanilha'");

        if ($busca->num_rows == 0) {
            $_SESSION['nomePlanilha'] = $nomePlanilha;
            $_SESSION['descricao'] = $descricao;
            header("Location: Treinos.php");
        } else {
            echo "<script>alert('Nome de planilha já existe, por favor deigite outro nome');</script>";
        }
    }

    ?>

    <section id="criar" class="container mt-5">
        <form method="post">
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



    <!-- <div>
        <h4>Cardio</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="cardiop1">Esteira</option>
             <option value="cardiop2">Bicicleta</option>
             <option value="cardiop3"></option>
             <option value="cardiop4"></option>
             <option value="cardiop5"></option>
             <option value="cardiop6"></option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="cardiop7">Tempo</option>
             <option value="cardiop8">10 min</option>
             <option value="cardiop9">15 min</option>
             <option value="cardiop10">20 min</option>
             <option value="cardiop11">25 min</option>
             <option value="cardiop12">30 min</option>
        </select>
        <button>Inserir</button>
    </div>
    <div class="treinos">
    <h4>Peito</h4>
         <select name="peito" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="peitop1">supino reto</option>
             <option value="peitop2">Supino inclinado barra</option>
             <option value="peitop3">Supino declinado barra</option>
             <option value="peitop4">cruxifixo reto</option>
             <option value="peitop5">voador</option>
             <option value="peitop6">Flexão de braços</option>
        </select>
        
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="peitop7">1</option>
             <option value="peitop8">2</option>
             <option value="peitop9">3</option>
             <option value="peitop10">4</option>
             <option value="peitop11">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticao">Repeticoes</option>
             <option value="peitop12">10</option>
             <option value="peitop13">12</option>
             <option value="peitop14">15</option>
        </select>
        <button>Inserir</button>
    </div>


   

    <div class="treinos" >
        <h4>Costas</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="costasop1">supino reto</option>
             <option value="costasop2">remada fechada</option>
             <option value="costasop3">puxada neutra</option>
             <option value="costasop4"></option>
             <option value="costasop5"></option>
             <option value="costasop6"></option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="series">Séries</option>
             <option value="costasop6">1</option>
             <option value="costasop7">2</option>
             <option value="costasop8">3</option>
             <option value="costasop9">4</option>
             <option value="costasop10">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticoes">Repeticoes</option>
             <option value="costasop11">10</option>
             <option value="costasop12">12</option>
             <option value="costasop13">15</option>
        </select>
        <button>Inserir</button>
    </div>
    <div class="treinos">
        <h4>Ombros</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção1">Exercício</option>
             <option value="valor_da_opção1">supino reto</option>
             <option value="valor_da_opção2">remada fechada</option>
             <option value="valor_da_opção3">puxada neutra</option>
             <option value="valor_da_opção1"></option>
             <option value="valor_da_opção2"></option>
             <option value="valor_da_opção3"></option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Séries</option>
             <option value="valor_da_opção3">1</option>
             <option value="valor_da_opção3">2</option>
             <option value="valor_da_opção3">3</option>
             <option value="valor_da_opção3">4</option>
             <option value="valor_da_opção3">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Repeticoes</option>
             <option value="valor_da_opção3">10</option>
             <option value="valor_da_opção3">12</option>
             <option value="valor_da_opção3">15</option>
        </select>
        <button>Inserir</button>
    </div>
    <div class="treinos">
        <h4>Tríceps</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção1">Exercício</option>
             <option value="valor_da_opção1">supino reto</option>
             <option value="valor_da_opção2">remada fechada</option>
             <option value="valor_da_opção3">puxada neutra</option>
             <option value="valor_da_opção1"></option>
             <option value="valor_da_opção2"></option>
             <option value="valor_da_opção3"></option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Séries</option>
             <option value="valor_da_opção3">1</option>
             <option value="valor_da_opção3">2</option>
             <option value="valor_da_opção3">3</option>
             <option value="valor_da_opção3">4</option>
             <option value="valor_da_opção3">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Repeticoes</option>
             <option value="valor_da_opção3">10</option>
             <option value="valor_da_opção3">12</option>
             <option value="valor_da_opção3">15</option>
        </select>
        <button>Inserir</button>
    </div>
    <div class="treinos">
        <h4>Pernas</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção1">Exercício</option>
             <option value="valor_da_opção1">Leg press 45º</option>
             <option value="valor_da_opção2">Cadeira extensora</option>
             <option value="valor_da_opção3">Cadeira flexora</option>
             <option value="valor_da_opção1">Flexora</option>
             <option value="valor_da_opção2">Extensora</option>
             <option value="valor_da_opção3">Afundo com barra</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Séries</option>
             <option value="valor_da_opção3">1</option>
             <option value="valor_da_opção3">2</option>
             <option value="valor_da_opção3">3</option>
             <option value="valor_da_opção3">4</option>
             <option value="valor_da_opção3">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Repeticoes</option>
             <option value="valor_da_opção3">10</option>
             <option value="valor_da_opção3">12</option>
             <option value="valor_da_opção3">15</option>
        </select>
        <button>Inserir</button>
    </div>

    <div class="treinos">
        <h4>Abdômen</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exericicio">Exercício</option>
             <option value="op1">supino reto</option>
             <option value="op2">Infra solo</option>
             <option value="op3"></option>
             <option value="op4">Prancha</option>
             <option value="op5"></option>
             <option value="op3"></option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="valor_da_opção3">1</option>
             <option value="valor_da_opção3">2</option>
             <option value="valor_da_opção3">3</option>
             <option value="valor_da_opção3">4</option>
             <option value="valor_da_opção3">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="valor_da_opção3">Repeticoes</option>
             <option value="valor_da_opção3">10</option>
             <option value="valor_da_opção3">12</option>
             <option value="valor_da_opção3">15</option>
        </select>
        <button type= "button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .10rem; --bs-btn-font-size: .75rem;">Inserir</button>
    </div> -->

    <section id="pegar" class="container mt-5">
        <h2 class="text-center">Treinos prontos</h2>
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