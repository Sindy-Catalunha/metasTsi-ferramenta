<!-- Página de equipe restrita com verificação se não ter login -->
<?php
include "function.php";
session_start();
criaHeader("Entrar");

if(@$_SESSION["logado"] == 1){
    criaMainFormEquipe();
} else{
    echo "<div class='divErro'>
    SOMENTE COM LOGIN</div>";
}
criaFooter();
?>