<!-- PÁGINA DE ENTRADA COM OU SEM ERRO -->
<?php
include "function.php";
criaHeader("Entrar");

$msgErro = @$_GET['error']; //o get pega da url;
$erro = "";

if($msgErro == 'LOGIN'){
    $erro = "<div class='divErro'>
    EMAIL OU SENHA INCORRETOS</div>";
}
criaMainLogin($erro);

criaFooter();
?>