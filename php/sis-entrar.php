<!-- Verificações de acesso de login -->
<?php
include "function.php";
session_start();

criaHeader("Criar Equipe");


$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "admin@admin" && $senha == "1234"){
    $_SESSION["logado"] = 1;
    header('Location: form-equipe.php?check=LOGADO');
} else{
    $_SESSION["logado"] = 0;
    header('Location: entrar.php?error=LOGIN');
}
criaFooter();
?>