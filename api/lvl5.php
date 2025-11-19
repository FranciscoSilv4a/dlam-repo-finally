<?php
    session_start();
    if($_SESSION['passou4'] == 1) {
        $_SESSION['passou3'] = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = $_POST['alt'];
            if($valor) {
                $_SESSION['passou5'] = 1;
                $_SESSION['pontuacao'] += 50;
                header('location: final.php');
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
    <title>Nível 2</title>
    <link rel="stylesheet" href="style/lvl5.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 2</div>
        <p class="txt">
            Sentimos muito soldado, este é o epicentro de tudo. Isso na sua frente é o próprio Lúcifer, que emergiu das profundezas 
            do inferno há alguns minutos. Ele não se esconde mais, não finge ser bom. Não podemos fazer mais nada, morra com honra, 
            estamos gratos em servir com você. Foi a missão mais promissora de todas.
        </p>
    </div>
    <form class="btnContainer" action="lvl5.php" method="POST">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" type="submit" name="alt">a) Ajoelhar-se</button>
        <button class="btn" id="btnB" type="submit" name="alt">b) Cometer suicídio</button>
        <button class="btn" id="btnC" type="submit" name="alt" value="1">c) Crer em Deus</button>
        <button class="btn" id="btnD" type="submit" name="alt">d) Lutar</button>
        <div class="dica"></div>
    </form>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) Armas não o machucarão.
        </p>
        <p class="txt">
            2) Ajoelhar não poupa sua alma.
        </p>
        <p class="txt">
            3) Se matar é orgulho.
        </p>
    </div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>