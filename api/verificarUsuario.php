<?php
    session_start();

    require_once 'conexao.php'; //  n dá erro se já houver conexão

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM `tentativas` WHERE `nome` = '$nome' AND `senha`='$senha'"; //  var dentr de "" tem que ter ''


    $resultado = mysqli_query($con, $sql);  //  o banco retorna uma array de tuplas/linhas

    $numRows = mysqli_num_rows($resultado);

    if($numRows > 0) {
        $_SESSION['usuario'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
        exit();
    }
    else {
        $_SESSION['error'] = "Nome ou senha inválidos";
        header('Location: login.php');
        exit();
    }
?>