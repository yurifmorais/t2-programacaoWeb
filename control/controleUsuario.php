<?php
include '../model/crudUsuario.php';

if (isset($_POST["opcao"])) {
    $opcao = $_POST["opcao"];
} else {
    $opcao = $_GET["opcao"];
}

switch ($opcao) {
    case 'Cadastrar':
        cadastrarUsuario($_POST["email"], sha1($_POST["senha"]));
        header("Location: ../view/cadastrarUsuario.php");

    case 'Entrar':
        $email = $_POST["email"];
        $senha = sha1($_POST["senha"]);
        $banco = buscarUsuario($email);

        if ($email == $banco['email']) {
            if ($senha == $banco['senha']) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['codigo'] = $banco['codigo'];
                header("Location: ../view/mostrarJogador.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location ='../view/paginaLogin.php';</script>";
            }
        } else {
            echo "<script>alert('Email Incorreto!');</script>";
            echo "<script>window.location = '../view/paginaLogin.php';</script>";
        }
        break;

    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Destruiu a sessão!');</script>";
        echo "<script>window.location = '../view/paginaLogin.php';</script>";
        break;
}
