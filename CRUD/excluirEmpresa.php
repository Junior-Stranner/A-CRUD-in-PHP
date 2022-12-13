<?php

    include "conexao.php";
    $sql = "DELETE FROM empresa WHERE id_empresa = " . $_GET['cod'];
    mysqli_query($conexao, $sql);
    header("location: listaEmpresa.php");