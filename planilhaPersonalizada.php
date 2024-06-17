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
    <!-- CREATE TABLE `bd_academia`.`planilhamigas` (`cod` INT NOT NULL AUTO_INCREMENT , `nome_planilha` VARCHAR NOT NULL , PRIMARY KEY (`cod`)) ENGINE = InnoDB; -->

    <?php

    session_start();

    require_once "banco.php";

    $usu = $_SESSION['usuario'];
    $nomePlanilha = $_SESSION['nomePlanilha'] ?? null;

    if ($nomePlanilha === null) {
        die("Nome da planilha não fornecido");
    }

    try {
        // Tenta selecionar dados da tabela do usuário
        $tabela = "planilha_" . $banco->real_escape_string($usu);
        $busca = $banco->query("SELECT * FROM $tabela");

        // Se a tabela não existe, cria uma nova tabela
        if ($busca === false) {
            // A tabela não existe, então cria uma nova tabela
            $q = "CREATE TABLE IF NOT EXISTS $tabela (
            cod INT NOT NULL AUTO_INCREMENT,
            nome_planilha VARCHAR(255) NOT NULL,
            PRIMARY KEY (cod)
        )";

            $resp = $banco->query($q);

            if ($resp) {
                $stmt = $banco->prepare("INSERT INTO $tabela (nome_planilha) VALUES ('$nomePlanilha')");

                if ($stmt->execute()) {
                    echo "Planilha adicionada com sucesso.";
                    echo "Tabela criada com sucesso.";
                } else {
                    throw new Exception("Erro ao adicionar a planilha: " . $stmt->error);
                }

                $stmt->close();
            } else {
                throw new Exception("Erro ao criar a tabela: " . $banco->error);
            }
        } else {
            // Inserindo dados na tabela

        }
    } catch (mysqli_sql_exception $e) {
        // Trata exceções de SQL
        if ($e->getCode() == 1146) { // Código de erro para tabela não encontrada
            // Cria a tabela
            $q = "CREATE TABLE IF NOT EXISTS $tabela (
            cod INT NOT NULL AUTO_INCREMENT,
            nome_planilha VARCHAR(255) NOT NULL,
            PRIMARY KEY (cod)
        )";

            $resp = $banco->query($q);

            if ($resp) {
                //echo "Tabela criada com sucesso.";
            } else {
                echo "Erro ao criar a tabela: " . $banco->error;
            }
        } else {
            echo "Erro: " . $e->getMessage();
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
    //Tabela já existe



    //     ALTER TABLE TbCliente
    // ADD COLUMN salario DECIMAL(11,2);

    // ALTER TABLE `planilha_personalizada` ADD FOREIGN KEY (`exercicio2`) REFERENCES `exercicos`(`cod`) ON DELETE RESTRICT ON UPDATE RESTRICT


    ?>

    <div class="container-sm d-flex flex-column justify-content-center mt-5">
        <div class="container divExercicio rounded shadow">
            <form action="" method="post" class="my-4">
                <div class="input-group my-2">
                    <span class="label input-group-text ">Nome da planilha</span>
                    <p aria-label="First name" class="form-control"><?= $nomePlanilha ?></p>
                </div>
                <div class="input-group my-2">
                    <span class="label input-group-text ">Nome do exercício</span>
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
                    <input type="text" aria-label="Last name" class="form-control" name="repeticoes" required>
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
    }

    try {
        // Tabela do usuário
        $tabela = "planilha_" . $banco->real_escape_string($usu);

        $buscaExercicio = $banco->query("SELECT * FROM exercicios WHERE  nome='$nomeExercicio', peso='$peso', series='$series', repeticoes='$repeticoes'");
        if ($buscaExercicio->num_rows == 0) {

            // Inserir exercício na tabela 'exercicios'
            $stmt = $banco->prepare("INSERT INTO exercicios ( nome, peso, series, repeticoes) VALUES ('$nomeExercicio', '$peso', '$series', '$repeticoes')");
            if (!$stmt) {
                throw new Exception("Falha ao preparar a consulta: " . $banco->error);
            }
        } else {
            if ($stmt->execute()) {
                $codExercicio = $stmt->insert_id; // Obtém o ID do exercício inserido

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
                    $busca = $banco->query("SELECT * FROM $tabela WHERE $colunaExercicio IS NULL");
                    if ($busca->num_rows > 0) {
                        $buscaCod = $banco->query("SELECT * FROM exercicios WHERE nome='$nomeExercicio', peso='$peso', series='$series', repeticoes='$repeticoes'");
                        $obj = $buscaCod->fetch_object();
                        $banco->query("ALTER TABLE $tabela SET $codExercicio= '$obj->cod'");
                        echo "<script>alert('Exercício adicionado com sucesso!');</script>";
                        break;
                    }
                }
            } else {
                throw new Exception("Erro ao adicionar o exercício: " . $stmt->error);
            }
            $stmt->close();
        }
    } catch (mysqli_sql_exception $e) {
        echo "Erro de SQL: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }

    ?>

</body>

</html>