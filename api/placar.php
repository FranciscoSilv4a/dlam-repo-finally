<?php
    session_start();
    if(empty($_SESSION['usuario'])) {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placar</title>
    <link rel="stylesheet" href="style/contas.css">
</head>
<body>
    <style>
        a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        color: transparent;
        cursor: pointer;
        text-decoration: none;
        }
        a span {
            color: #c8cc98;
            text-shadow: 1.5px 1.5px #381800, -1.5px -1.5px #381800;
        }
    </style>
    <div class="mainContainer">
        <div class="title">Placar</div>
        <table border = '1' align="center" class='tbl'>
        <?php
            $nome = $_SESSION['usuario'];
            include 'conexao.php';
            $sql = "SELECT * FROM `tentativas` WHERE `nome` = '$nome' AND `senha` != '' ORDER BY `pontuacao` DESC";
            $resultado = mysqli_query($con, $sql);
            echo "
                    <tr class='dataTr'>
                    <th>Nome</th>
                    <th>Pontuação</th>
                    </tr>
            ";
            while($fetch = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $fetch['nome'] . "</td>";
                echo "<td>" . $fetch['pontuacao'] . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
        <button class="btn" id="btnInicio"><a href="index.php"><span>Início</span></a></button>
    </div>
    <p class="version">Versão 0.01</p>
</body>
</html>