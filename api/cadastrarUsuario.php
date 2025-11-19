<?php
include 'conexao.php';
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if(!empty($senha) && strlen($senha) <= 8) {
      $sql = "SELECT * FROM `tentativas` WHERE `senha`='$senha'"; //  var dentro de "" tem que ter ''

      $resultado = mysqli_query($con, $sql);  //  o banco retorna uma array de tuplas/linhas nesse caso

      $numRows = mysqli_num_rows($resultado);

      if($numRows > 0) {
            $_SESSION['error'] = "Usuário já existente";
            header('Location: cadastro.php');
            exit();
      }
      else {
            $sql = "INSERT INTO `tentativas`(`nome`,`senha`) VALUES ('$nome', '$senha')";

            $resultado = mysqli_query($con, $sql);

            if($resultado) {
                  echo "Cadastrado com sucesso!";
                  header('Location: login.php');
                  exit();
            }
            else {
                  $_SESSION['error'] = "Campo(s) inválido(s)";
                  echo "Erro ao cadastrar: ".mysqli_error($con);
                  header('Location: cadastro.php');
                  exit();
            }
      }
}
else {
      $_SESSION['error'] = "Senha muito grande";
      header('Location: cadastro.php');
      exit();
}
?>