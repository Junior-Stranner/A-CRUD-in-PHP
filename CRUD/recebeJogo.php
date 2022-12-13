<?php

include 'conexao.php';

 $nmJogo= $_POST['nm_jogo'];
 $tipoJogo = $_POST['tipo_jogo'];

 $sql = "INSERT INTO jogo (nm_jogo, tipo_jogo)
         VALUES ('". $nmJogo ."', '".$tipoJogo ."') ";

mysqli_query($conexao,$sql);
