<!DOCTYPE html>
<html>
<head>
    <title>Inserir Treino</title>
</head>
<body>
    <h1>Inserir Treino</h1>
    <form action="processar_treino.php" method="post">
        <label for="aluno">Aluno:</label>
        <select name="aluno_id" id="aluno" required>
            <!-- Preencha a lista de alunos aqui -->
        </select><br><br>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required><br><br>

        <label for="exercicio">Exercício:</label>
        <input type="text" name="exercicio" id="exercicio" required><br><br>

        <label for="series">Séries:</label>
        <input type="number" name="series" id="series" required><br><br>

        <label for="repeticoes">Repetições:</label>
        <input type="number" name="repeticoes" id="repeticoes" required><br><br>

        <input type="submit" value="Inserir Treino">
    </form>
</body>
</html>

<?php 

require 'Treinos.php';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $data = $_POST['data'];
    $exercicio = $_POST['exercicio'];
    $series = $_POST['series'];
    $repeticoes = $_POST['repeticoes'];

    // Crie uma instância da classe Treino
    $treino = new Treino("localhost", "root", "", "bd_academia");

    // Adicione o exercício
    $treino->adicionarExercicio($usuario, $data, $nomeExercicio, $series, $repeticoes);

}

?>