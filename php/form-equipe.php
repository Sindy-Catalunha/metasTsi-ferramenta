<!-- Página de equipe restrita com verificação se não ter login -->
<?php
include "function.php";
session_start();

$emailLogin = "";

if(@$_SESSION["logado"] == 0){
    criaHeader("Equipes", $usuario = "");
    echo "<div class='divErro'>🔒 SOMENTE COM LOGIN</div>";
} else{
    criaHeader("Equipes", $_SESSION["email"]);
    $emailLogin = "<div class='divAcerto'><strong>⚠️ ATENÇÃO:</strong> Logado com ".$_SESSION["email"]."</div>";
    criaMainFormEquipe($emailLogin);
}

criaFooter();
?>