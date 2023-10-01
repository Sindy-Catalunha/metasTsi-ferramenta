<!-- PÁGINA DE ENTRADA COM OU SEM ERRO -->
<?php
include "function.php";
criaHeader("Entrar", $usuario = "");

$msgErro = @$_GET['error']; //o get pega da url;
$erro = ""; //para dizer do erro de login

if($msgErro == 'LOGIN'){
    $erro = "<div class='divErro'><strong>❌ ATENÇÃO:</strong> EMAIL OU SENHA INCORRETOS</div>";
}

$msgSucesso = @$_GET['sucesso'];
$msg = "";

if($msgSucesso == 'LOG-OFF'){
    $msg = "<div class='divLogoff'><strong>✔️ ATENÇÃO:</strong> LogOFF feito com sucesso</div>";
}

echo $msg;

criaMainLogin($erro);

criaFooter();
?>