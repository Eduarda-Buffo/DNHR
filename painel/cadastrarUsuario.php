<?php

//require_once "../controle/UsuarioDAO.php";
include '../controle/UsuarioDAO.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$datanasc = $_POST['datanasc'];

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setDatanasc($datanasc);

$dao = new UsuarioDAO();
$dao->cadastrar($usuario);


header("location:usuarios.php");




?>
