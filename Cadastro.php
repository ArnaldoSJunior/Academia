<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #032030;">
    <div  class="container-md position-absolute top-50 start-50 translate-middle text-white p-3 shadow-lg rounded" style="background-color: #006DA4;">
        <h2 style="color: #FFFFFF; text-align: center;">Cadastre-se</h2>
        <div style="display: flex; justify-content: center;">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Nome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Sobrenome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-3">
                        <input type="password" class="form-control" placeholder="Senha" aria-label="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <input class="btn btn-primary shadow" type="submit" value="Cadastrar" style="background-color: #004D74;">
                    </div>
                </div>
            </form>
        </div>
    </div>

 

<?php 

require_once "banco.php";

$usuario = $_POST["Usuario"] ?? null;
$nome = $_POST["Nome"] ?? null;
$sobrenome = $_POST["Sobrenome"] ?? null;
$email = $_POST["E-mail"] ?? null;
$telefone = $_POST["Telefone"] ?? null;
$senha = $_POST["Senha"] ?? null;


require "bd_academia.php";

if(is_null($usuario) || is_null($nome) || is_null($sobrenome) || is_null($email) || is_null($telefone)|| is_null($senha)){
    // digitar info
}else{
    // criando
    criarUsuario($usuario, $nome, $sobrenome, $email, $telefone, $senha);
    echo "Usuario criado com sucesso!";
}


?>


</body>
</html>
