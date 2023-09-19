<!-- Página de equipe restrita com verificação se não ter login -->
<?php
include "function.php";
session_start();
criaHeader("Equipes");

if(@$_SESSION["logado"] == 0){
    echo "<div class='divErro'>
    SOMENTE COM LOGIN</div>";
} else{
    criaMainFormEquipe();
}
criaFooter();
?>