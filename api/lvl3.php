<?php
    session_start();
    if($_SESSION['passou2'] == 1) {
        $_SESSION['passou1'] = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = $_POST['alt'];
            if($valor) {
                $_SESSION['passou3'] = 1;
                $_SESSION['pontuacao'] += 50;
                header('location: lvl4.php');
                exit();
            }
            else {
                header('Location: morte.php');
                exit();
            }
        }
    }
    else {
        header('Location: intrusos.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nível 3</title>
    <link rel="stylesheet" href="style/lvl3.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 3</div>
        <p class="txt">
            Você foi transportado para uma dimensão anômala. Incontáveis olhos, a única parte do céu possível 
            de ser compreendida por sua limitada mente humana, te observam incansávelmente. eles veem sua alma, 
            seus pecados, e questionam: qual é o pecado primordial?
        </p>
    </div>
    <form class="btnContainer" action="lvl3.php" method="POST">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" type="submit" name="alt">a) Gula</button>
        <button class="btn" id="btnB" type="submit" name="alt" value="1">b) Orgulho</button>
        <button class="btn" id="btnC" type="submit" name="alt">c) Avareza</button>
        <button class="btn" id="btnD" type="submit" name="alt">d) Raiva</button>
        <div class="dica"></div>
    </form>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) Todos os pecados derivam deste.
        </p>
        <p class="txt">
            2) Primeiro pecado cometido por Lucifer.
        </p>
        <p class="txt">
            3) No fundo, todos possuímos.
        </p>
    </div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>