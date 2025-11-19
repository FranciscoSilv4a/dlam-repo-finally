//  declaração de variáveis importantes
const dicaContainer = document.querySelector(".dicaContainer");
const btnA = document.getElementById('btnA');   //  btn de alternativas
const btnB = document.getElementById('btnB');
const btnC = document.getElementById('btnC');
const btnD = document.getElementById('btnD');
const itemInventario = document.getElementById('item1');
const dica = document.querySelector('.dica');
const close = document.querySelector('.close');
const audio1 = document.getElementById('audio1');   // audios
const audio2 = document.getElementById('audio2');

// animações da mão
function pointerHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handPointer.png')";
}
function normalHand() {
    let hand = document.querySelector('.hand');
    hand.style.backgroundImage = "url('issets/handIcon.png')";
}

// abrir e fechar a aba de dicas
function openDicas() {
    let dicaContainer = document.querySelector(".dicaContainer");
    dicaContainer.style.display = "flex";
}

function closeDicas() {
    let dicaContainer = document.querySelector(".dicaContainer");
    dicaContainer.style.display = "none";
}

btnA.onmouseover = pointerHand; //  botões onmouseover
btnB.onmouseover = pointerHand;
btnC.onmouseover = pointerHand;
btnD.onmouseover = pointerHand;
btnA.onmouseout = normalHand; //  botões onmouseout
btnB.onmouseout = normalHand;
btnC.onmouseout = normalHand;
btnD.onmouseout = normalHand;
//
dica.onmouseover = pointerHand;
dica.onmouseout = normalHand;
dica.onclick = openDicas;
//
close.onmouseover = pointerHand;
close.onmouseout = normalHand;
close.onclick = closeDicas;
//
itemInventario.onmouseover = pointerHand;
itemInventario.onmouseout = normalHand;

// POR QUE ADD OS EVENTLISTENERS ASSIM FUNCIONA?