<?php
    include 'conexao.php';
    $sql ="SELECT id_jogo, nm_jogo, tipo_jogo
    FROM jogo";
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
    <h2>Lista de Jogo</h2>
        <table border="1">
        <tr>
            <td>Código</td>
            <td>Nome Completo</td>
            <td>Tipo</td>
        </tr>
<?php
    while($linha =mysqli_fetch_array($resultado)){
        echo"<tr>";
        echo"<td>$linha[id_jogo]</td>";
        echo"<td>$linha[nm_jogo]</td>";
        echo"<td>$linha[tipo_jogo]</td>";
        echo"<td>";
        echo"<a href='excluirJogo.php?cod=$linha[id_jogo]'>X</a>";
        echo"</td>";
        echo"</tr>";
    }
    ?>
    </table>
</body>
</html>