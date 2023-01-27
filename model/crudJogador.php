<?php
include 'conexaoBD.php';

function cadastrarJogador($nome, $salario, $codigoEmpresario)
{
    connect();
    query("INSERT INTO jogador (nome, salario, codigoEmpresario)
          VALUES ('$nome', '$salario', $codigoEmpresario)");
    close();
}

function mostrarJogadores($codigo)
{
    connect();
    $consulta = query("SELECT * FROM jogador WHERE codigoEmpresario = $codigo");
    close();

    $resultados = [];
    if (mysqli_num_rows($consulta) > 0) {
        while ($resultadoSeparado = mysqli_fetch_assoc($consulta)) {
            $resultados[] = $resultadoSeparado;
        }
    }
    return $resultados;
}

function mostrarJogadorAlterar($codigo)
{
    connect();
    $consulta = query("SELECT * FROM jogador where codigo = $codigo");
    close();
    $resultadoSeparado = mysqli_fetch_assoc($consulta);
    return $resultadoSeparado;
}

function alterarJogador($codigo, $nome, $salario)
{
    connect();
    query("UPDATE jogador SET nome = '$nome', salario = '$salario' WHERE codigo = $codigo");
    close();
}

function excluirJogador($codigo)
{
    connect();
    query(" DELETE FROM jogador WHERE codigo = $codigo");
    close();
}
