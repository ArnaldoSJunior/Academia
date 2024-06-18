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

          select,
          button {
               margin-bottom: 15px;
          }

          button {
               width: 100%;
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
          <h1>Treino: <?=$nomePlanilha?></h1>
          <div class="row">
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Cardio</h4>
                         <form method="POST" action="Exercicios.php"> 
                              <select name="cardio_exercicio" id="treino" class="form-select form-select-lg mb-5 p-1 pb-2" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="cardiop1">Esteira</option>
                              <option value="cardiop2">Bike</option>
                              <option value="cardiop3">Elíptico</option>
                              <option value="cardiop4">Máquina de Remo</option>
                              <option value="cardiop5">Cross Trainer</option>
                              <option value="cardiop6">Stair Climber</option>
                         </select><br>
                         <select name="cardio_tempo" id="treino" class="form-select form-select-lg mb-4 p-1 pb-2" aria-label="Large select example">
                              <option value="cardiop7">Tempo</option>
                              <option value="cardiop8">10 min</option>
                              <option value="cardiop9">15 min</option>
                              <option value="cardiop10">20 min</option>
                              <option value="cardiop11">25 min</option>
                              <option value="cardiop12">30 min</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                       
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Peito</h4>
                         <form method="POST" action="Exercicios.php"> 
                              <select name="peito_exercicio" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="peitop1">Supino reto</option>
                              <option value="peitop2">Supino inclinado barra</option>
                              <option value="peitop3">Supino declinado barra</option>
                              <option value="peitop4">Cruxifixo reto</option>
                              <option value="peitop5">Voador</option>
                              <option value="peitop6">Flexão de braços</option>
                         </select><br>
                         <select name="peito_serie" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="peitop7">1</option>
                              <option value="peitop8">2</option>
                              <option value="peitop9">3</option>
                              <option value="peitop10">4</option>
                              <option value="peitop11">5</option>
                         </select><br>
                         <select name="peito_repeticoes" id="treino" class="form-select form-select-md mb-3 p-1" aria-label="Large select example">
                              <option value="repeticao">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="peitop12">10</option>
                              <option value="peitop13">12</option>
                              <option value="peitop14">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                        
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Costas</h4>
                         <form method="POST" action="Exercicios.php"> 
                         <select name="costas_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="costasop1">Puxada frontal polia alta</option>
                              <option value="costasop2">Remada fechada</option>
                              <option value="costasop3">Puxada neutra</option>
                              <option value="costasop4">Remada unilateral halteres</option>
                              <option value="costasop5">Pulldown polia alta</option>
                              <option value="costasop6">Remada sentada polia baixa</option>
                         </select><br>
                         <select name="costas_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="series">Séries</option>
                              <option value="costasop6">1</option>
                              <option value="costasop7">2</option>
                              <option value="costasop8">3</option>
                              <option value="costasop9">4</option>
                              <option value="costasop10">5</option>
                         </select><br>
                         <select name="costas_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="costasop11">10</option>
                              <option value="costasop12">12</option>
                              <option value="costasop13">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                        
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Ombros</h4>
                         <form method="POST" action="Exercicios.php">     
                              <select name="ombros_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="ombrop1">Elevação lateral halteres</option>
                              <option value="ombrop2">Elevação frontal halteres</option>
                              <option value="ombrop3">Desenvolvimento militar barra</option>
                              <option value="ombrop4">Desenvolvimento Arnold</option>
                              <option value="ombrop5">Elevação posterior de ombros</option>
                              <option value="ombrop6">Remada alta (Upright Row)</option>
                         </select><br>
                         <select name="ombros_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="ombrop7">1</option>
                              <option value="ombrop8">2</option>
                              <option value="ombrop9">3</option>
                              <option value="ombrop10">4</option>
                              <option value="ombrop11">5</option>
                         </select><br>
                         <select name="ombros_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="ombrop12">10</option>
                              <option value="ombrop13">12</option>
                              <option value="ombrop14">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                 
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Tríceps</h4>
                         <form method="POST" action="Exercicios.php">  
                         <select name="triceps_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="tricepsop1">Tríceps testa barra</option>
                              <option value="tricepsop2">Tríceps corda polia alta</option>
                              <option value="tricepsop3">Tríceps francês</option>
                              <option value="tricepsop4">Tríceps coice polia</option>
                         </select><br>
                         <select name="triceps_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="tricepsop7">1</option>
                              <option value="tricepsop8">2</option>
                              <option value="tricepsop9">3</option>
                              <option value="tricepsop10">4</option>
                              <option value="tricepsop11">5</option>
                         </select><br>
                         <select name="triceps_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="tricepsop12">10</option>
                              <option value="tricepsop13">12</option>
                              <option value="tricepsop14">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                      
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Bíceps</h4>
                         <form method="POST" action="Exercicios.php">
                              <select name="biceps_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="exercicio">Exercício</option>
                              <option value="biceps1">Rosca direta barra</option>
                              <option value="biceps2">Rosca concentrada halteres</option>
                              <option value="biceps3">Rosca Scott</option>
                              <option value="biceps4">Rosca Bayesian</option>
                         </select><br>
                         <select name="biceps_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="tricepsop7">1</option>
                              <option value="tricepsop8">2</option>
                              <option value="tricepsop9">3</option>
                              <option value="tricepsop10">4</option>
                              <option value="tricepsop11">5</option>
                         </select><br>
                         <select name="biceps_repeticoes" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="tricepsop12">10</option>
                              <option value="tricepsop13">12</option>
                              <option value="tricepsop14">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                        
                    </div>
               </div>
               <div class="col-md-4">

                    <div class="treinos">
                         <h4>Pernas</h4>
                         <form method="POST" action="Exercicios.php">     
                         <select name="pernas_exercicio" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="exercicios">Exercício</option>
                              <option value="pernasop1">Leg press 45º</option>
                              <option value="pernasop2">Cadeira extensora</option>
                              <option value="pernasop3">Cadeira flexora</option>
                              <option value="pernasop4">Flexora</option>
                              <option value="pernasop5">Extensora</option>
                              <option value="pernasop6">Afundo com barra</option>
                         </select><br>
                         <select name="pernas_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="pernasop7">1</option>
                              <option value="pernasop8">2</option>
                              <option value="pernasop9">3</option>
                              <option value="pernasop10">4</option>
                              <option value="pernasop11">5</option>
                         </select><br>
                         <select name="pernas_repeticao" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repetições</option>
                              <option value="peitop12">6</option>
                              <option value="peitop12">8</option>
                              <option value="pernasop12">10</option>
                              <option value="pernasop13">12</option>
                              <option value="pernasop14">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                   
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="treinos">
                         <h4>Abdômen</h4>
                         <form method="POST" action="Exercicios.php"><select name="treino" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="abdomen_exericicio">Exercício</option>
                              <option value="abdomenop1">Abdominal na prancha inclinada</option>
                              <option value="abdomenop2">Prancha abdominal estática</option>
                              <option value="abdomenop3">Elevação de pernas na barra fixa</option>
                              <option value="abdomenop4">Crunch abdominal com peso</option>
                              <option value="abdomenop5">Prancha lateral</option>
                              <option value="abdomenop6">Flexão de pernas na barra fixa</option>
                         </select><br>
                         <select name="abdomen_serie" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="serie">Séries</option>
                              <option value="abdomenop7">1</option>
                              <option value="abdomenop8">2</option>
                              <option value="abdomenop9">3</option>
                              <option value="abdomenop10">4</option>
                              <option value="abdomenop11">5</option>
                         </select><br>
                         <select name="abdomen_repeticao" id="treino" class="form-select form-select-lg mb-3 p-1" aria-label="Large select example">
                              <option value="repeticoes">Repeticoes</option>
                              <option value="abdomenop12">6</option>
                              <option value="abdomenop13">8</option>
                              <option value="abdomenop14">10</option>
                              <option value="abdomenop15">12</option>
                              <option value="abdomenop16">15</option>
                         </select>
                         <button type="button" class="btn btn-primary">Adicionar</button></form>
                         
                    </div>
               </div>
          </div>
     </div>

     <?php 

require 'Treinos.php';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeExercicio = $_POST['nomeExercicio'];
    $series = $_POST['series'];
    $repeticoes = $_POST['repeticoes'];

    // Crie uma instância da classe Treino
    $treino = new Treino("localhost", "root", "", "bd_academia");

    // Adicione o exercício
    $treino->adicionarExercicio($nomeExercicio, $series, $repeticoes);

}

?>








     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>