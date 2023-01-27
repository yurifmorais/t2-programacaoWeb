<?php
include 'conexaoBD.php';

function cadastrarUsuario($email, $senha)
{
    connect();
    query("INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')");
    close();
}

function buscarUsuario($email)
{
    connect();
    $consulta = query("SELECT * FROM usuario WHERE email='$email'");
    close();
    $resultadoSeparado = mysqli_fetch_assoc($consulta);
    return $resultadoSeparado;
}
