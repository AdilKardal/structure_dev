let buttonSelector = document.querySelector("button");
let reponse = document.querySelector(".reponse");
let nombreCache = 0;
let textInput;
let commencer = false;

buttonSelector.addEventListener("click", function () {
  if (commencer == false) {
    nombreCache = valeurAleatoire();
    console.log(nombreCache);
    commencer = true;
    afficherBouton();
  } else {
    afficher();
    comparer();
    afficherBouton();
  }
});

function valeurAleatoire() {
  nombreCache = [Math.floor(Math.random() * 100)];
  return nombreCache;
}

function afficherBouton() {
  if (commencer == false) {
    buttonSelector.innerText = "Démarrer le jeu";
  } else {
    buttonSelector.innerText = "Comparer la valeur";
  }
}

function afficher() {
  textInput = document.querySelector("input").value;
  textInput = parseInt(textInput);
  console.log(textInput);
}

function comparer() {
  if (textInput < nombreCache) {
    reponse.innerText = "C'est plus cher";
  } else if (textInput > nombreCache) {
    reponse.innerText = "C'est moins cher";
  } else if (textInput == nombreCache) {
    reponse.innerText = " C'est le juste prix !";
    textInput.value = " "
    commencer = false;
  } else {
    reponse.innerText = "Veuillez saisir valeur correct";
  }
}
