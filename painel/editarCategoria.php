<?php
//require_once "modelo/Categoria.php";
//require_once 'controle/CategoriaDAO.php';
include '../controle/CategoriaDAO.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$categoria = new Categoria();
$categoria->setId($id);
$categoria->setNome($nome);
$categoria->setDescricao($descricao);

$dao = new CategoriaDAO();
$dao->editar($categoria);


header("location:categorias.php");




?>
