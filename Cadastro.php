<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #032030;">
    <div  class="container position-absolute top-50 start-50 translate-middle text-white p-3 shadow-lg rounded" style="background-color: #006DA4;">
        <h2 style="color: #FFFFFF; text-align: center;" class="fs-1 fw-bold pb-2">Cadastre-se</h2>
        <div style="display: flex; justify-content: center;">
            <form class="container mx-5">
                <div class="row ">
                    <div class="col-md-14 mb-1 ">
                        <label for="" class="fw-bold" style="font-size: 0.8em;">Usuario</label>
                        <input type="text" class="form-control shadow" placeholder="" aria-label="Usuario">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-1 ">
                    <label for="" class="fw-bold" style="font-size: 0.8em;">Nome</label>
                        <input type="text" class="form-control shadow" placeholder="" aria-label="Nome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-1">
                    <label for="" class="fw-bold" style="font-size: 0.8em;">Sobrenome</label>
                        <input type="text" class="form-control shadow" placeholder="" aria-label="Sobrenome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-1">
                        <label for="" class="fw-bold" style="font-size: 0.8em;">E-mail</label>
                        <input type="text" class="form-control shadow" placeholder="exemplo@gmail.com" aria-label="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-1">
                    <label for="" class="fw-bold" style="font-size: 0.8em;">Telefone</label>
                        <input type="text" class="form-control shadow" placeholder="(XX) XXXX-XXXX" aria-label="Telefone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-14 mb-1">
                    <label for="" class="fw-bold" style="font-size: 0.8em;">Senha</label>
                        <input type="password" class="form-control shadow" placeholder="Tamanho de 8-20 caracteres" aria-label="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-3 ">
                        <input class="btn btn-primary shadow p-3 fs-5 fw-bold" type="submit" value="Cadastrar" style="background-color: #004D74;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>