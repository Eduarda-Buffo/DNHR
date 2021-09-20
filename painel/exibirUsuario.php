<?php
//require_once "controle/UsuarioDAO.php";
include '../controle/UsuarioDAO.php';

$dao = new UsuarioDAO();
$dados = $dao->listarPorId($_GET['id']);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$datanasc = $_POST['datanasc'];

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
        <h2>Editar Usuario</h2>        
        <form action="editarUsuario.php" method="POST">
            <label for="nome" class="">Nome:</label>
            <br />
            <input name="nome" id="nome" placeholder="Escreva o seu nome" type="text">
            <br />
            <label for="email" class="">Email:</label>
            <br />
            <input name="email" id="email" placeholder="Escreva o seu email" type="text">
            <br />
            <label for="senha" class="">Senha:</label>
            <br />
            <input name="senha" id="senha" placeholder="Escreva sua senha" type="password">
            <br />
            <label for="datanasc">Data de Nascimento:</label>
            <br />
            <input name="datanasc" id="datanasc" type="date">
            <br />
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <button type="submit">Editar</button>
        </form>
    </body>    
</html>
