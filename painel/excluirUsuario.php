<?php

//require_once 'controle/UsuarioDAO.php';
include '../controle/UsuarioDAO.php';

$dao = new UsuarioDAO();

$dao->excluir($_GET['id']);


header("location:usuarios.php");




?>
