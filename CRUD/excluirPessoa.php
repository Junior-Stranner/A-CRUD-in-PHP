<?php

    include "conexao.php";
    $sql = "DELETE FROM pessoa WHERE id_pessoa = " . $_GET['cod'];
    mysqli_query($conexao, $sql);
    header("location: listaPessoa.php");