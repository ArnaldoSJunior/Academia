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
            <div class="text-left text-white p-3">
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
    require_once "banco.php";

    $usu = $_SESSION['usuario'];
    $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;

    if ($nomePlanilha == null) {
        die("Nome da planilha não fornecido");
    }

    try {
        // Tenta selecionar dados da tabela do usuário
        $tabela = "planilha_" . $banco->real_escape_string($usu);
        $busca = $banco->query("SELECT * FROM $tabela");

        // Se a tabela não existe, cria uma nova tabela
        if ($busca === false) {
            $q = "CREATE TABLE IF NOT EXISTS $tabela (
                cod INT NOT NULL AUTO_INCREMENT
                nome_planilha VARCHAR(255) NOT NULL,
                PRIMARY KEY (cod)
            )";

            $t = "INSERT INTO $tabela (cod, nome_planilha) VALUES (NULL, '$nomePlanilha')";
            $resp = $banco->query($t);
        } else {
            $busca = $banco->query("SELECT * FROM $tabela WHERE nome_planilha = '$nomePlanilha'");
            if ($busca->num_rows == 0) {
                $s = "INSERT INTO planilha_$usu (cod, nome_planilha) VALUES (NULL, '$nomePlanilha')";
                $resp = $banco->query($s);
            }

            // Inserindo dados na tabela
        }
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1146) { // Código de erro para tabela não encontrada
            $q = "CREATE TABLE IF NOT EXISTS $tabela (
                cod INT NOT NULL AUTO_INCREMENT,
                nome_planilha VARCHAR(255) NOT NULL,
                PRIMARY KEY (cod)
            )";
            $s = "INSERT INTO planilha_$usu (cod, nome_planilha) VALUES (NULL, '$nomePlanilha')";

            $resp = $banco->query($s);


            echo "Tabela criada com sucesso.";
        } else {
            echo "Erro: " . $e->getMessage();
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
    ?>

    <div class="container-sm d-flex flex-column justify-content-center mt-5">
        <div class="container divExercicio rounded shadow">
            <form action="" method="post" class="my-4">
                <div class="input-group my-2">
                    <span class="label input-group-text">Nome da planilha</span>
                    <p aria-label="First name" class="form-control"><?= htmlspecialchars($nomePlanilha) ?></p>
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text">Nome do exercício</span>
                    <input type="text" aria-label="First name" class="form-control" name="nomeExercicio" required>
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text">Peso(Kg)</span>
                    <input type="number" aria-label="First name" class="form-control" name="peso" required>
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text">nº de séries</span>
                    <input type="number" aria-label="First name" class="form-control" name="series" required>
                    <span class="label input-group-text">nº de repetições</span>
                    <input type="number" aria-label="Last name" class="form-control" name="repeticoes" required>
                </div>
                <div class="input-gruop my-2 mt-3 text-center">
                    <input type="submit" value="Adicionar" class="btn btn-outline-primary shadow">
                </div>
            </form>
        </div>
    </div>

    <?php
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
?>

</body>

</html>