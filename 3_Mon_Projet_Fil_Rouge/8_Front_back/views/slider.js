let image = document.querySelector("#slide");

//On déclare un tableau d'images 
let arrayImg = ["images/passport_avion.jpeg", "images/lit_wedd.jpeg","images/voyage.webp"];
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
// setInterval("changeSlide(1)", 2500);