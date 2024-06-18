<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizar treino</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_logado.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand " href="index.php">Home</a>
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
        <h1 class="display-4">Personalize seu treino!</h1>
        <p class="lead">Não esqueça o alongamento!</p>
    </header>

<div class="container">
    <div>
        <h4>Cardio</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="cardiop1">Esteira</option>
             <option value="cardiop2">Bike</option>
             <option value="cardiop3">Elíptico</option>
             <option value="cardiop4">Máquina de Remo</option>
             <option value="cardiop5">Cross Trainer</option>
             <option value="cardiop6">Stair Climber</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="cardiop7">Tempo</option>
             <option value="cardiop8">10 min</option>
             <option value="cardiop9">15 min</option>
             <option value="cardiop10">20 min</option>
             <option value="cardiop11">25 min</option>
             <option value="cardiop12">30 min</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
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
             <option value="repeticao">Repetições</option>
             <option value="peitop12">10</option>
             <option value="peitop13">12</option>
             <option value="peitop14">15</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
    </div>


   

    <div class="treinos" >
        <h4>Costas</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="costasop1">Puxada frontal polia alta</option>
             <option value="costasop2">remada fechada</option>
             <option value="costasop3">puxada neutra</option>
             <option value="costasop4">Remada unilateral halteres</option>
             <option value="costasop5">Pulldown polia alta</option>
             <option value="costasop6">Remada sentada polia baixa</option>
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
             <option value="repeticoes">Repetições</option>
             <option value="costasop11">10</option>
             <option value="costasop12">12</option>
             <option value="costasop13">15</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
    </div>
    <div class="treinos">
        <h4>Ombros</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="ombrop1">Elevação lateral halteres</option>
             <option value="ombrop2">Elevação frontal halteres</option>
             <option value="ombrop3">Desenvolvimento militar barra</option>
             <option value="ombrop4">Desenvolvimento Arnold</option>
             <option value="ombrop5">Elevação posterior de ombros</option>
             <option value="ombrop6">Remada alta (Upright Row)</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="ombrop7">1</option>
             <option value="ombrop8">2</option>
             <option value="ombrop9">3</option>
             <option value="ombrop10">4</option>
             <option value="ombrop11">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticoes">Repetições</option>
             <option value="ombrop12">10</option>
             <option value="ombrop13">12</option>
             <option value="ombrop14">15</option> 
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
    </div>
    <div class="treinos">
        <h4>Tríceps</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicio">Exercício</option>
             <option value="tricepsop1">Rosca direta barra</option>
             <option value="tricepsop2">Rosca concentrada halteres</option>
             <option value="tricepsop3">Tríceps testa barra</option>
             <option value="tricepsop4">Tríceps corda polia alta</option>
             <option value="tricepsop5">Rosca Scott</option>
             <option value="tricepsop6">Tríceps francês (Skull Crusher)</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="tricepsop7">1</option>
             <option value="tricepsop8">2</option>
             <option value="tricepsop9">3</option>
             <option value="tricepsop10">4</option>
             <option value="tricepsop11">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticoes">Repetições</option>
             <option value="tricepsop12">10</option>
             <option value="tricepsop13">12</option>
             <option value="tricepsop14">15</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
    </div>
    <div class="treinos">
        <h4>Pernas</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exercicios">Exercício</option>
             <option value="pernasop1">Leg press 45º</option>
             <option value="pernasop2">Cadeira extensora</option>
             <option value="pernasop3">Cadeira flexora</option>
             <option value="pernasop4">Flexora</option>
             <option value="pernasop5">Extensora</option>
             <option value="pernasop6">Afundo com barra</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="pernasop7">1</option>
             <option value="pernasop8">2</option>
             <option value="pernasop9">3</option>
             <option value="pernasop10">4</option>
             <option value="pernasop11">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticoes">Repetições</option>
             <option value="pernasop12">10</option>
             <option value="pernasop13">12</option>
             <option value="pernasop14">15</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
    </div>

    <div class="treinos">
        <h4>Abdômen</h4>
         <select name="treino" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="exericicio">Exercício</option>
             <option value="abdomenop1">Abdominal na prancha inclinada</option>
             <option value="abdomenop2">Prancha abdominal estática</option>
             <option value="abdomenop3">Elevação de pernas na barra fixa</option>
             <option value="abdomenop4">Crunch abdominal com peso</option>
             <option value="abdomenop5">Prancha lateral</option>
             <option value="abdomenop6">Flexão de pernas na barra fixa</option>
        </select>
        <select name="serie" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="serie">Séries</option>
             <option value="abdomenop7">1</option>
             <option value="abdomenop8">2</option>
             <option value="abdomenop9">3</option>
             <option value="abdomenop10">4</option>
             <option value="abdomenop11">5</option>
        </select>
        <h6>X</h6>
        <select name="repeticoes" id="treino" class="form-select form-select-lg mb-3" aria-label="Large select example">
             <option value="repeticoes">Repeticoes</option>
             <option value="abdomenop12">10</option>
             <option value="abdomenop13">12</option>
             <option value="abdomenop14">15</option>
        </select>
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .50rem;">
  Adicionar
</button>
</div>



</body>
</html>