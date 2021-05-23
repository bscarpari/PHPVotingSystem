<?php
session_start();
if (empty($_POST['usuario']) && empty($_POST['email']) && empty($_POST['senha'])) {
    $_SESSION['erro'] = "Todos os campos estão nulos";
    header("Location: index.php");
} else if (empty($_POST['usuario']) || empty($_POST['email']) || empty($_POST['senha'])) {
    $_SESSION['erro'] = "Preencha o campo vazio";
    header("Location: index.php");
} else {
    if (strcmp($_POST['email'], 'admin@admin') != 0) {
        $_SESSION['erro'] = "E-mail incorreto!";
        header("Location: index.php");
    } else if (strcmp($_POST['senha'], 'admin') != 0) {
        $_SESSION['erro'] = "Senha incorreta!";
        header("Location: index.php");
    } else {
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: votacao.php");
    }
}