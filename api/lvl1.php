<?php
    session_start();
    if($_SESSION['podeComecar'] == 1) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = $_POST['alt'];
            if($valor) {
                $_SESSION['passou1'] = 1;
                $_SESSION['pontuacao'] = 50;
                header('location: lvl2.php');
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
    <title>Nível 1</title>
    <link rel="stylesheet" href="style/lvl1.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 1</div>
        <p class="txt">
            Esta criatura aparenta estar calma, refletindo sobre sua própria existência. Entretanto, mantenha distância 
            não sabemos que tipos de vírus e patógenos, mesmo as mais inofensivas anomalias, podem carregar.
             O que está a sua frente 
            se classifica como uma CRIATURA ANÔMALA NEUTRA.
        </p>
    </div>
    <form class="btnContainer" action="lvl1.php" method="POST">
        <p class="title">
            Possibilidades:
        </p>
            <button type="submit"class="btn" id="btnA" name ="alt" value="1">a) Esqueleto solitário</button>
            <button type="submit"class="btn" id="btnB" name ="alt">b) Nietzsche ressucitado</button>
            <button type="submit"class="btn" id="btnC" name ="alt">c) Seu eu verdadeiro</button>
            <button type="submit"class="btn" id="btnD" name ="alt">d) Senhor dos mares</button>
            <div class="dica"></div>
</form>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            1) A anomalia não está viva, no sentido convencional.
        </p>
        <p class="txt">
            2) A criatura não é uma personificação do abstrato.
        </p>
        <p class="txt">
            3) O alvo não aparenta ter nenhuma autoridade sobre a natureza.
        </p>
    </div>
    <div class="imgBlack"></div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie Talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>