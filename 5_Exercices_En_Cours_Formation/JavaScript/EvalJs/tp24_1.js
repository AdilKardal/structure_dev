console.log("TP 24 1");

/*
1 l'utilisateur click sur "demarer le jeux"     OK
2 le jeux génère un chiffre aleatoire           OK
3 l'utilisateur saisi une valeur 
4 l'utilsiateur click sur "envoyer valeur"
5 on verifie que la valeur soit un nombre entre 1 et 1000 
6 cette valeur est comparer a la valeur aléatoire 
7 si elle est plus grande message affiche "trop cher"
8 si elle est plus petite message affiche "moins cher"
9 si la valeur est identique  message affiche "prix OK*
10 on propose à l'utilisateur de recommencer */

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
  nombreCache = [Math.floor(Math.random() * 1000)];
  return nombreCache;
}

function afficherBouton() {
  if (commencer == false) {
    buttonSelector.innerText = "Démarer le jeux";
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
    message.innerText = "C'est plus cher";
  } else if (textInput > nombreCache) {
    message.innerText = "C'est moins cher";
  } else if (textInput == nombreCache) {
    message.innerText = " C'est le juste prix !";
    commencer = false;
  } else {
    message.innerText = "Veuillez saisir valeur correct";
  }
}
