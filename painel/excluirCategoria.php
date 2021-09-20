<?php

//require_once 'controle/CategoriaDAO.php';
include '../controle/CategoriaDAO.php';
$dao = new CategoriaDAO();

$dao->excluir($_GET['id']);


header("location:categorias.php");




?>
