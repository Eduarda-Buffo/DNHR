<?php
//require_once "controle/CategoriaDAO.php";
include '../controle/CategoriaDAO.php';

$dao = new CategoriaDAO();
$dados = $dao->listarPorId($_GET['id']);

$id        = $dados['cat_id'];
$nome      = $dados['cat_nome'];
$descricao = $dados['cat_descricao'];

?>

<!doctype html>

    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="ptBR">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CRUD - Modelo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" /> 
    </head>                          
    <body>
        <h2>Editar Categoria</h2>        
        <form action="editarCategoria.php" method="POST">
            <label for="nome" class="">Nome:</label>
            <br />
            <input name="nome" id="nome" placeholder="Escreva o nome da categoria" type="text" value="<?php echo $nome;?>"  />
            <br />
            <label for="descricao">Descrição:</label>
            <br />
            <textarea name="descricao" id="descricao" placeholder="Escreva a descricao"><?php echo $descricao;?></textarea>                                            
            <br />
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <button type="submit">Editar</button>
        </form>
    </body>    
</html>
