<?php

$conexao = mysqli_connect("localhost","root","","crud");

$sql = "INSERT INTO empresa (nm_razao_social,nm_fantasia, nr_cnpj) 
        VALUES ('TBSUL LTDB','ITAGRES','56754')";

MYSQLI_QUERY($conexao,$sql);        
?>