<?php
    $endereco = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "dont-look-at-me";

    $con = mysqli_connect($endereco, $usuario, $password, $dbname);

    if($con) {
        echo "Conexão realizada com sucesso";
    }
    else {
        die("Erro na conexão".mysqli_connect_error());
    }
?>