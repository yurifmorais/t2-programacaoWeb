<?php
include '../model/crudJogador.php';
$opcao = $_POST["opcao"];
session_start();
switch ($opcao) {
    case 'Cadastrar':
        cadastrarJogador($_POST["nome"], $_POST["salario"], $_SESSION['codigo']);
        header("Location: ../view/cadastrarJogador.php");
        break;

    case 'Alterar':
        alterarJogador($_POST["codigo"], $_POST["nome"], $_POST["salario"]);
        header("Location: ../view/mostrarJogador.php");
        break;

    case 'Excluir':
        excluirJogador($_POST["codigo"]);
        header("Location: ../view/mostrarJogador.php");
        break;
}
