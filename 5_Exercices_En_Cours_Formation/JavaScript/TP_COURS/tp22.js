// Voici comment va se dérouler notre bouton Spoiler :
// - Un bouton s’affiche sur la page proposant d’afficher le message
// - L’utilisateur clique sur le bouton, ce qui va activer une condition
// • La variable hidden vaut true ? Dans ce cas, on affiche le message, on change
// le texte du bouton en « Cacher », et on passe la variable hidden en false
// • La variable hidden vaut false ? Dans ce cas, on cache le message, on change
// le texte du bouton en « Afficher », et on passe la variable hidden en true
let affiche = true;
let buttonSelector = document.querySelector("button")
let texte = document.querySelector("p")
texte.style.display = "none"


buttonSelector.addEventListener("click", function(){
if (affiche){
    texte.style.display = "block"
    buttonSelector.textContent = "Cacher"
    affiche = false
} else if (affiche == false ){
    texte.style.display = "none"
    buttonSelector.textContent = "Afficher"
    affiche = true
}
    
})

