<?php
    include 'conexao.php';
    $sql ="SELECT id_pessoa, nm_pessoa, nr_cpf
    FROM pessoa";
    $resultado = mysqli_query($conexao, $sql);
?>
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
    <h2>Lista de Pessoas</h2>
        <table border="1">
        <tr>
            <td>Código</td>
            <td>Nome Completo</td>
            <td>CPF</td>
        </tr>
<?php
    while($linha =mysqli_fetch_array($resultado)){
        echo"<tr>";
        echo"<td>$linha[id_pessoa]</td>";
        echo"<td>$linha[nm_pessoa]</td>";
        echo"<td>$linha[nr_cpf]</td>";
        echo"<td>";
        echo"<a href='excluirPessoa.php?cod=$linha[id_pessoa]'>X</a>";
        echo"</td>";
        echo"</tr>";
    }
    ?>
    </table>
</body>
</html>