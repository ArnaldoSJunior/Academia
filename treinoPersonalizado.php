<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Personalizar treino</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <style>
          body {
               background-color: #f8f9fa;
          }

          .navbar {
               background-color: #022B42;
          }

          .jumbotron {
               background-color: #004D74;
               color: #fff;
               text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
          }

          .treinos {
               background-color: #fff;
               padding: 20px;
               border-radius: 8px;
               box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
               margin-bottom: 20px;
          }

          h4 {
               margin-bottom: 20px;
          }

          button {
               width: 23vw;
          }
     </style>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                         <a class="btn btn-outline-primary mx-1" href="logado.php">Voltar</a>
                    </li>
               </ul>
          </div>
     </nav>

     <header class="jumbotron text-center">
          <h1 class="display-4">Personalize seu treino!</h1>
          <p class="lead">Não esqueça o alongamento!</p>
     </header>
     <?php

     session_start();
     require_once "banco.php";

     $usu = $_SESSION['usuario'];
     $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;

     if ($nomePlanilha == null) {
          die("Nome da planilha não fornecido");
     }

     ?>

     <div class="container my-5">
          <h1>Treino: <?= $nomePlanilha ?></h1>
          <div class="row">
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Cardio</h4>
                         <form method="POST" action="">
                              <select name="cardio_exercicio" id="treino" class="form-select form-select-lg mb-5 p-1 pb-2" aria-label="Large select example">
                              <option ></option>
                                   <option value="Esteira">Esteira</option>
                                   <option value="Bike">Bike</option>
                                   <option value="Elíptico">Elíptico</option>
                                   <option value="Máquina de Remo">Máquina de Remo</option>
                                   <option value="Cross Trainer">Cross Trainer</option>
                                   <option value="Stair Climber">Stair Climber</option>
                              </select><br>
                              <select name="cardio_tempo" id="treino" class="form-select form-select-lg mb-4 p-1 pb-2" aria-label="Large select example">
                              <option ></option>
                                   <option value="10">10 min</option>
                                   <option value="15">15 min</option>
                                   <option value="20">20 min</option>
                                   <option value="25">25 min</option>
                                   <option value="30">30 min</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Peito</h4>
                         <form method="POST" action="">
                              <select name="peito_exercicio" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Supino Reto">Supino reto</option>
                                   <option value="Supino Inclinado Barra">Supino inclinado barra</option>
                                   <option value="Supino declinado barra">Supino declinado barra</option>
                                   <option value="Cruxifixo reto">Cruxifixo reto</option>
                                   <option value="Voador">Voador</option>
                                   <option value="Flexão de braços">Flexão de braços</option>
                              </select><br>
                              <select name="peito_serie" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="peito_repeticoes" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Costas</h4>
                         <form method="POST" action="">
                              <select name="costas_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Puxada frontal polia alta">Puxada frontal polia alta</option>
                                   <option value="Remada fechada">Remada fechada</option>
                                   <option value="Puxada neutra">Puxada neutra</option>
                                   <option value="Remada unilateral halteres">Remada unilateral halteres</option>
                                   <option value="Pulldown polia alta">Pulldown polia alta</option>
                                   <option value="Remada sentada polia baixa">Remada sentada polia baixa</option>
                              </select><br>
                              <select name="costas_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="costas_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Ombros</h4>
                         <form method="POST" action="">
                              <select name="ombros_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Elevação lateral halteres">Elevação lateral halteres</option>
                                   <option value="Elevação frontal halteres">Elevação frontal halteres</option>
                                   <option value="Desenvolvimento militar barra">Desenvolvimento militar barra</option>
                                   <option value="Desenvolvimento Arnold">Desenvolvimento Arnold</option>
                                   <option value="Elevação posterior de ombros">Elevação posterior de ombros</option>
                                   <option value="Remada alta (Upright Row)">Remada alta (Upright Row)</option>
                              </select><br>
                              <select name="ombros_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="ombros_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Tríceps</h4>
                         <form method="POST" action="">
                              <select name="triceps_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Tríceps testa barra">Tríceps testa barra</option>
                                   <option value="Tríceps corda polia alta">Tríceps corda polia alta</option>
                                   <option value="Tríceps francês">Tríceps francês</option>
                                   <option value="Tríceps coice polia">Tríceps coice polia</option>
                              </select><br>
                              <select name="triceps_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="triceps_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Bíceps</h4>
                         <form method="POST" action="">
                              <select name="biceps_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Rosca direta barra">Rosca direta barra</option>
                                   <option value="Rosca concentrada halteres">Rosca concentrada halteres</option>
                                   <option value="Rosca Scott">Rosca Scott</option>
                                   <option value="Rosca Bayesian">Rosca Bayesian</option>
                              </select><br>
                              <select name="biceps_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="biceps_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">

                    <div class="treinos">
                         <h4>Pernas</h4>
                         <form method="POST" action="">
                              <select name="pernas_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Leg press 45º">Leg press 45º</option>
                                   <option value="Cadeira extensora">Cadeira extensora</option>
                                   <option value="Cadeira flexora">Cadeira flexora</option>
                                   <option value="Flexora">Flexora</option>
                                   <option value="Extensora">Extensora</option>
                                   <option value="Afundo com barra">Afundo com barra</option>
                              </select><br>
                              <select name="pernas_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="pernas_repeticao" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Abdômen</h4>
                         <form method="POST" action="">
                              <select name="treino" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="Abdominal na prancha inclinada">Abdominal na prancha inclinada</option>
                                   <option value="Prancha abdominal estática">Prancha abdominal estática</option>
                                   <option value="Elevação de pernas na barra fixa">Elevação de pernas na barra fixa</option>
                                   <option value="Crunch abdominal com peso">Crunch abdominal com peso</option>
                                   <option value="Prancha lateral">Prancha lateral</option>
                                   <option value="Flexão de pernas na barra fixa">Flexão de pernas na barra fixa</option>
                              </select><br>
                              <select name="abdomen_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                              </select><br>
                              <select name="abdomen_repeticao" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option ></option>
                                   <option value="6">6</option>
                                   <option value="8">8</option>
                                   <option value="10">10</option>
                                   <option value="12">12</option>
                                   <option value="15">15</option>
                              </select><br>
                              <button type="button" class="btn btn-primary">Adicionar</button>
                         </form>

                    </div>
               </div>
          </div>
     </div>

     <?php

     require 'Treinos.php';

     // Verifique se o formulário foi enviado
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nomeExercicio = $_POST['nomeExercicio'] ?? null;
          $peso = $_POST['peso'] ?? null;
          $series = $_POST['series'] ?? null;
          $repeticoes = $_POST['repeticoes'] ?? null;

          if (is_null($nomeExercicio) || is_null($peso) || is_null($series) || is_null($repeticoes)) {
               echo "Todos os campos são obrigatórios.";
          } else {
               try {
                    // Tabela do usuário
                    $tabela = "planilha_" . $banco->real_escape_string($usu);

                    // Verificar se o exercício já existe
                    $stmt = $banco->prepare("SELECT cod FROM exercicios WHERE nome = ? AND peso = ? AND series = ? AND repeticoes = ?");
                    $stmt->bind_param("siii", $nomeExercicio, $peso, $series, $repeticoes);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows == 0) {
                         // Inserir exercício na tabela 'exercicios' se não existir
                         $stmt = $banco->prepare("INSERT INTO exercicios (nome, peso, series, repeticoes) VALUES (?, ?, ?, ?)");
                         $stmt->bind_param("siii", $nomeExercicio, $peso, $series, $repeticoes);
                         $stmt->execute();
                         $codExercicio = $stmt->insert_id; // Obtém o ID do exercício inserido
                    } else {
                         $row = $result->fetch_assoc();
                         $codExercicio = $row['cod'];
                    }

                    // Adicionar exercício na planilha do usuário
                    for ($i = 0; $i < 10; $i++) {
                         $colunaExercicio = "exercicio$i";

                         // Verificar se a coluna já existe
                         $result = $banco->query("SHOW COLUMNS FROM $tabela LIKE '$colunaExercicio'");
                         if ($result->num_rows == 0) {
                              // Adicionar coluna e chave estrangeira se não existir
                              $banco->query("ALTER TABLE $tabela ADD $colunaExercicio INT");
                              $banco->query("ALTER TABLE $tabela ADD FOREIGN KEY ($colunaExercicio) REFERENCES exercicios(cod)");
                         }

                         // Inserir o exercício na coluna correspondente
                         $busca = $banco->query("SELECT * FROM $tabela WHERE $colunaExercicio IS NULL AND nome_planilha = '$nomePlanilha'");
                         if ($busca->num_rows > 0) {
                              $banco->query("UPDATE $tabela SET $colunaExercicio = $codExercicio WHERE $colunaExercicio IS NULL AND nome_planilha = '$nomePlanilha' LIMIT 1");
                              echo "<script>alert('Exercício adicionado com sucesso!');</script>";
                              return;
                         }
                    }

                    echo "<script>alert('Não foi possível adicionar o exercício.');</script>";
               } catch (mysqli_sql_exception $e) {
                    echo "Erro de SQL: " . $e->getMessage();
               } catch (Exception $e) {
                    echo "Erro: " . $e->getMessage();
               }
          }
     }

     ?>








     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>