<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      include 'menu.php';
  ?>
    <h2>Cadastro de Empresa</h2>

    <form method ="post" action ="recebePessoa.php">
        Nome Completo: <br>
        <input type="text" name="nm_pessoa"><br><br>

         nr_cpf: <br>
        <input type="text" name="nr_cpf"><br><br>

        <input type="submit" value ="salvar">


    </form>
</body>
</html>