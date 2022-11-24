// - Créez une page html avec un lien et un bouton
// - A l’aide de addEventListener créez un évènement pour supprimer le lien en cliquant dessus.
// - Changez le background color du body en survolant le bouton et faites qu’il redevienne blanc quand la
// souris quitte le bouton.
// - Créez une section avec un h1 dedans et un texte dans la section mais en dehors du h1.
// - Créez un évènement au clique du h1 qui crée une alert disant que vous cliquez sur le h1 et de même
// pour la section. Que constatez vous ? 

let linkSelector = document.querySelector("a");
let buttonSelector = document.querySelector("button")
let titre = document.createElement("h1");
let section = document.createElement("section");
let texte = document.createElement("p")

linkSelector.addEventListener("click", function(e){
e.preventDefault()
linkSelector.remove()
})

// buttonSelector.addEventListener("mouseover", function(){
//     document.body.style.backgroundColor = "grey"
// })
// buttonSelector.addEventListener("mouseout", function(){
//     document.body.style.backgroundColor = "unset"
// })

titre.textContent = "Bienvenue";
texte.textContent = "dhjsfz dsfgzfghsd ddsffsbv"
document.body.prepend(section);
section.append(titre);
section.append(texte);

titre.addEventListener("click", function(e){
    alert("Vous cliquez sur le h1")
    e.stopPropagation()
})


section.addEventListener("click", function(){
    alert("Vous cliquez sur la section")
})

// - Créez une fonctions permettant de générer une couleurs aléatoirement.
// - Essayez de faire changer la couleur d’un bouton toutes les 2 secondes à l’aide de setInterval et de
// votre fonction.
// - Créez un lien permettant d’arrêter ce changement de couleur. 

function generateRandomColor(){
    var randomColor = '#'+Math.floor(Math.random()*16777215).toString(16);
    return randomColor;
}

function color(){
    buttonSelector.style.backgroundColor = generateRandomColor()
}

setInterval(color,2000)

