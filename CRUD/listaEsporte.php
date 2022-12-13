<?php
    include 'conexao.php';
    $sql ="SELECT id_esporte, nm_esporte FROM esporte";
    $resultado = mysqli_query($conexao, $sql);
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
      include 'menu.php';
  ?>
    <h2>Lista de Esportes</h2>
<body>
<table border="1">
        <tr>
            <td>Código</td>
            <td>Nome</td>
        </tr>
        <?php
    while($linha =mysqli_fetch_array($resultado)){
        echo"<tr>";
        echo"<td>$linha[id_esporte]</td>";
        echo"<td>$linha[nm_esporte]</td>";
        echo"<td>";
        echo"<a href='excluirEsporte.php?cod=$linha[id_esporte]'>X</a>";
        echo"</td>";
        echo"</tr>";
    }
    ?>
    </table>
    </body>    
    </html>