<?php

include 'conexao.php';

 $nmPessoa= $_POST['nm_pessoa'];
 $nrCpf = $_POST['nr_cpf'];

 $sql = "INSERT INTO pessoa (nm_pessoa, nr_cpf)
         VALUES ('". $nmPessoa ."', '".$nrCpf ."') ";

mysqli_query($conexao,$sql);
