<?php
    include 'conexao.php';
    $sql ="SELECT id_empresa, nm_razao_social, nm_fantasia, nr_cnpj
    FROM empresa";
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
    <h2>Lista de Empresas</h2>
        <table border="1">
        <tr>
            <td>Cód</td>
            <td>Razão Social</td>
            <td>Nome Fantasia</td>
            <td>CNPJ</td>
        </tr>
<?php
    while($linha =mysqli_fetch_array($resultado)){
        echo"<tr>";
        echo"<td>$linha[id_empresa]</td>";
        echo"<td>$linha[nm_razao_social]</td>";
        echo"<td>$linha[nm_fantasia]</td>";
        echo"<td>$linha[nr_cnpj]</td>";
        echo"<td>";
        echo"<a href='excluirEmpresa.php?cod=$linha[id_empresa]'>X</a>";
        echo"</td>";
        echo"</tr>";
    }
    ?>
    </table>
</body>
</html>