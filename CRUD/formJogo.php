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
    <h2>Cadastro de Jogo</h2>

    <form method ="post" action ="recebeJogo.php">
        Nome Completo: <br>
        <input type="text" name="nm_jogo"><br><br>

         tipo_jogo: <br>
        <input type="text" name="tipo_jogo"><br><br>

        <input type="submit" value ="salvar">


    </form>
</body>
</html>