// Dans cet exercice, vous allez réaliser un Timer !
// Nous allons pouvoir réviser les notions de conditions, de fonctions, et d’intervalles.
// Voici comment va se dérouler notre Timer :
// - Un bouton s’affiche sur la page proposant de « Lancer le décompte »
// - L’utilisateur clique sur ce bouton, qui va lancer une fonction start(), qui s’occupera de créer
// un intervalle sur la fonction decompte() toutes les secondes, pendant 10 secondes.
// - La fonction decompte(), lorsqu’elle est appelée :
// • Décrémentera (retirera 1) à une variable secondes, qui contient comme valeur 10
// • Vérifiera si secondes est différent de 0, pour afficher dans la page le nombre de
// secondes restantes
// • Sinon, si secondes vaut 0, appellera la fonction stop(), qui aura pour but d’arrêter
// l’intervalle

let interval;
let secondes = 11;

let buttonSelector = document.querySelector("button")
buttonSelector.addEventListener("click", function(){
interval = setInterval(decompte,1000)
    
})


function start(){
decompte()
}

function decompte(){
secondes --
buttonSelector.textContent = secondes
if(secondes == 0){
    stop();
    secondes = 11;
}
}


function stop(){
    clearInterval(interval)
}

