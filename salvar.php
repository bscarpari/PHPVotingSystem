<?php
session_start();
if (isset($_POST['submit'])) {
    if (isset($_COOKIE['votou'])) {
        $_SESSION['erro'] = "Só pode votar uma vez";
        header("Location: votacao.php");
    } else {
        session_start();
        setcookie("votou", 'sim', time() + 18000);

        $arquivo = fopen("./txt/resultado.txt", 'a');
        fputs($arquivo, $_POST['voto'] . "\n");
        fclose($arquivo);

        header("Location: resultado.php");
    }
}

if (isset($_POST['encerrar'])) {
    session_start();
    // setcookie("votou", 'sim', time() - 18000); //ao dar logout ele apaga o cookie (Trecho somente para testes)
    session_destroy();
    header("Location: index.php");
}

if (isset($_POST['pular'])) {
    header("Location: resultado.php");
}
