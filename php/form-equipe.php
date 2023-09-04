<?php
include "function.php";

criaHeader("Criar Equipe");

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "admin@admin" && $senha == "1234"){
    echo criaMainFormEquipe();
} else{
    echo 'Login errado :(';
}
criaFooter();
?>