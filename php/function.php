<?php

function criaHeader($titulo){
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
        <title>'.$titulo.'</title>
        <link rel="stylesheet" href="../style/estilo-fixo.css">
        <link rel="stylesheet" href="../style/pag-inicial.css">
        <link rel="stylesheet" href="../style/login.css">
        <link rel="stylesheet" href="../style/sobre.css">
        <link rel="stylesheet" href="../style/form-equipe.css">


    </head>
    <body>
        <header class="headerPai">
            <img class="imglogo" src="../img/logo.png" alt="logo">
            <nav class="navegacao">
                <a href="pag-inicial.php">INÍCIO</a>
                <a href="login.php">ENTRAR</a>
                <a href="sobre.php">SOBRE</a>
            </nav>
        </header>';
}


function criaMainInicial(){
    echo '<main class="mainEquipes">

    <div class="equipes">EQUIPE 1</div>
    <div class="equipes">EQUIPE 2</div>
    <div class="equipes">EQUIPE 3</div>

    </main>';
}

function criaMainSobre(){
    echo '<main class="mainSobre">
        <h1>Bem-vindo(a) ao MetasTsi - a plataforma definitiva para a colaboração eficaz e o alcance de metas conjuntas!</h1>

        <p class="descricao">O MetasTsi é um site inovador projetado para reunir indivíduos com objetivos comuns, permitindo seus membros criarem equipes dinâmicas e orientadas para metas. Seja você um líder visionário, um colaborador comprometido ou alguém em busca de parceiros para realizar projetos empolgantes, nossa plataforma é o lugar onde suas aspirações se transformam em realidade.
        </p>
    </main>';
}

function criaMainLogin(){
    echo '<main class="mainLogin">
    <form action="form-equipe.php" method="post">
        <fieldset class="fd-center">
            <p>ENTRAR</p>
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

function criaMainFormEquipe(){
    echo '<main class="main-equipe">
    <form action="form-equipe.php" method="post">
        <fieldset class="fd-center-equipe">
            <p>CRIAR EQUIPE</p>
            <label class="lb-center-equipe">Inserir nome do membro:
                <input class="in-center-equipe" name="nome" type="text" placeholder="Nome e sobrenome">
            </label>

            <label class="lb-center-equipe">E-mail do membro:
                <input class="in-center-equipe" name="email" type="email" placeholder="email-valido@dominio.com">
            </label>
            <label>
                <input id="bt-entrar-equipe" type="submit" value="INSERIR">
            </label>
        </fieldset>
    </form>
</main>';
}

function criaFooter(){
    echo '<footer class="footerPai">
    <div class="containerFooter">
        <img class="imgObjetivo" src="../img/objetivo.png" alt="">
        <div class="desenvolvedores">Desenvolvedores : Turma - Back End 1 2023.</div>
        <div class="instaText">
        <img class="instagram" src="../img/instagram.png" alt="instagram">
        <div>@metasTsi</div>
        </div>
    </div>
</footer>';
}
?>