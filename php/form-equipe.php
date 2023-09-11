<?php
include "function.php";

criaHeader("Criar Equipe");

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == "admin@admin" && $senha == "1234"){
    echo criaMainFormEquipe();
} else{
    echo '<main class="mainLogin">
    <form action="form-equipe.php" method="post">
        <fieldset class="fd-center">
            <p>LOGIN INCORRETO</p>
            <label class="lb-center">E-mail:
                <input class="in-center" name="email" type="email" placeholder="email-valido@dominio.com">
            </label>

            <label class="lb-center">Senha:
                <input class="in-center" name="senha" type="password" placeholder="4 a 6 dígitos">
            </label>
            <label>
                <input id="bt-entrar" type="submit" value="ENTRAR">
            </label>
        </fieldset>
    </form>
</main>';
}
criaFooter();
?>