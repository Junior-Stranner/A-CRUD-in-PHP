<?php

include 'conexao.php';

 $nmRazaoSocial = $_POST['nm_razao_social'];
 $nmFantasia = $_POST['nm_fantasia'];
 $nrCnpj = $_POST['nr_cnpj'];

 $sql = "INSERT INTO empresa (nm_razao_social, nm_fantasia, nr_cnpj)
        VALUES ('". $nmRazaoSocial ."', '".$nmFantasia ."', '".$nrCnpj."') ";

mysqli_query($conexao,$sql);

header("location: listaEmpresa.php");
