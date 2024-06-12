<pre>
<?php 

    $banco = new mysqli("localhost", "root", "", "bd_Academia");

    function criarUsuario(string $nome, string $usuario, string $senha, $debug=false) : void{
        global $banco;

       // $senha = password_hash($senha, PASSWORD_DEFAULT);

        $q = "INSERT INTO usuarios(cod, nome, usuario, senha) VALUES (NULL, '$nome', '$usuario', '$senha')";

        $resp = $banco->query($q);

        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }


    // function createOnDB($into, $values){
    //     global $banco;

    //     $q = "INSERT INTO $into VALUES $values";
    
    //     $resp = $banco->query($q);
    //     echo "<br> Query: $q"; 
    //     echo var_dump($resp);
    // }

    // function deletarUsuario(string $usuario) : void {
    //     global $banco;

    //     // $q = "DELETE FROM usuarios WHERE usuario='maria_22'";
    //     $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
        
    //     $resp = $banco->query($q);
    //     echo "<br> Query: $q";
    //     echo var_dump($resp);
    // }
    
    // function atualizarUsuario(string $usuario, string $nome="", string $senha="", bool $debug=false) : void {

    //     global $banco;

    //     $set = "";
    //     if($nome != "" & $senha != ""){
    //         // os dois
    //         $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
    //         $set = "nome='$nome', senha='$novaSenha'";
    //     } else if($nome != ""){
    //         // só o nome
    //         $set = "nome='$nome'";
    //     } else if ($senha != ""){
    //         // só a senha
    //         $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
    //         $set = "senha='$novaSenha'";
    //     }

        
    //     $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
        
    //     $resp = $banco->query($q);

    //     if($debug){
    //         echo "<br> Query: $q"; 
    //         echo var_dump($resp);
    //     }

    // }

    // criarUsuario("Yasmim", "yass", "abc");
    // criarUsuario("Miguel", "migas", "123");

    //atualizarUsuario("maria_22", "mariaaaaaa", "", false);

?>
</pre>