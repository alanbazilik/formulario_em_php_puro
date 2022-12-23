
<?php

include('config.php');
MYSQL::conectar();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulário</title>
</head>
<body>
    <div class="form_cd">
        <?php 
        if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
            $Nome = $_POST['Nome'];
            $Email = $_POST['Email'];
            $senha = $_POST['senha'];

            if ($Nome == '') {
                form::alert('erro','O Nome ficou vazio!');
             }else if($Email == '') {
                form::alert('erro','O Email ficou vazio!');
             }else if($senha == ''){
                form::alert('erro',' A Senha ficou vazio!');
             }else{
                form::cadastrar($Nome,$Email,$senha);
                form::alert('sucesso','Usuario'.$Nome.' Cadastrado com sucesso');
             }
        }
        
         
        ?>
        <h1>Cadastro de Usuário</h1>
    <form method="POST">
        <div><input type="text" name="Nome" placeholder="Nome"required ></div>
        <div><input type="email" name="Email" placeholder="Email" required></div>
        <div><input type="password" name="senha" placeholder="senha" required></div>
        <div><input type="submit" name="acao" value="Cadastrar"></div>
        <div><input type="hidden" name="form" value="f_form"></div>
    </form>
</div>
</body>
</html>