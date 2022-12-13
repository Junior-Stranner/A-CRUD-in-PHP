<?php

    include "conexao.php";
    $sql = "DELETE FROM jogo WHERE id_jogo = " . $_GET['cod'];
    mysqli_query($conexao, $sql);
    header("location: listaJogo.php");