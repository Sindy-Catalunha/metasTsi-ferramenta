<?php
function criaLogin($titulo){
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'.$titulo.'</title>
        <link rel="stylesheet" href="login.css">
    </head>
    
    <body>
        <form action="login.html">
            <fieldset class="fd-center">
                <p>LOGIN</p>
                <label class="lb-center"> Insira um e-mail válido:
                    <input class="in-center" type="email" placeholder="email-valido@dominio.com">
                </label>
    
                <label class="lb-center">Crie uma senha:
                    <input class="in-center"  type="search" placeholder="4 a 6 dígitos">
                </label>
                <img src="logo.svg" alt="">
            </fieldset>
        </form>
    </body>
    
    </html>';
}
?>