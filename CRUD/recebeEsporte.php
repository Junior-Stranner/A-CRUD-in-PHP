<?php

include 'conexao.php';


 $sql = "INSERT INTO esporte (nm_esporte) VALUES ('$_POST[nm_esporte]') ";

mysqli_query($conexao,$sql);

header("location: listaEsporte.php");
