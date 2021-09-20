<?php
include '../controle/UsuarioDAO.php';
//include 'controle/UsuarioDAO.php';
$dao = new UsuarioDAO();
$dados = $dao->listarTodos();


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
    <body>
        <h2>Novo Usuário</h2>
        <form action="cadastrarUsuario.php" method="POST">
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
            <button type="submit">Cadastrar</button>
        </form>
        

        <?php if (count($dados) < 1) { ?>
            <h3>Não existem registros cadastrados</h3>
        <?php } else {  ?>
            <h3>Usuarios Cadastrados</h3>
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) { ?>
                    <tr>
                        <td><?php echo $dado['uso_id']; ?></td>
                        <td><?php echo $dado['uso_nome']; ?></td>
                        <td><?php echo $dado['uso_email']; ?></td>
                        <td><?php echo $dado['uso_datanasc']; ?></td>
                        <td>
                            <a href='exibirUsuario.php?id=<?php echo $dado['uso_id']; ?>'>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href='excluirUsuario.php?id=<?php echo $dado['uso_id']; ?>'>
                                Excluir
                            </a>
                        </td>                         
                    </tr>
                    <?php } ?>    
                </tbody>
            </table>            
        <?php } ?>  
    </body>               
</html>
