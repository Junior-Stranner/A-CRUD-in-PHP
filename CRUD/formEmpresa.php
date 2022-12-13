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

    <form method ="post" action ="recebeEmpresa.php">
        Razão Social: <br>
        <input type="text" name="nm_razao_social"><br><br>

        Nome Fantesia: <br>
        <input type="text" name="nm_fantasia"><br><br>

        cpnj:<br>
        <input type="text" name="nr_cnpj"><br><br>

        <input type="submit" value ="salvar">


    </form>
</body>
</html>