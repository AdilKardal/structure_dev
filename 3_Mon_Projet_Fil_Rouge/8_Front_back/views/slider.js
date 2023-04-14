let image = document.querySelector("#slide");

//On déclare un tableau d'images 
let arrayImg = ["images/passport_avion.jpg", "images/lit_wedd.jpg"];
let numero = 0;
// La fonction ChangeSlide permet de changer le sens du caroussel
function changeSlide(sens) {
    numero = numero + sens;
    if (numero < 0){
        numero = arrayImg.length - 1;
    }else if (numero > arrayImg.length - 1){
        numero = 0;
    }
    // On change la source de l'image en fonction de la position du tableau arrayImg
    image.src = arrayImg[numero];
    
}
// La méthode setInterval appelle la fonction changeSlide toutes les 2.5s
setInterval("changeSlide(1)", 2500);


function afficherSelect() {
    // Récupération de la valeur sélectionnée dans la liste déroulante
    let motif = document.querySelector("#motif").value;
    // Récupération du formulaire masqué
    let formperso = document.querySelector("#formperso")
    formperso.style.display = "none";
    // Si la valeur sélectionnée est "Personnalisation" on affiche le formulaire
    if (motif === "Personnalisation") {
        formperso.style.display = "flex";
        //sinon on le masque
    } else{
        formperso.style.display = "none";
    }
  }

  function menuBurger(){
    let icon = document.querySelector("#burgericon");
    let menu = document.querySelector("#menuburger");
    let affiche = true;
    menu.style.display = "none"

    icon.addEventListener("click", function(){
       if (affiche) {
        menu.style.display = 'flex';
        affiche == false
       } else if (affiche == false){
        menu.style.display = "none"
        affiche == true
       }
    })
  }