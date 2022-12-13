<?php

    include "conexao.php";
    $sql = "DELETE FROM esporte WHERE id_esporte = " . $_GET['cod'];
    mysqli_query($conexao, $sql);
    header("location: listaEsporte.php");