let image = document.querySelector("#slide");

//On déclare un tableau d'images 
let arrayImg = ["images/bebe.webp", "images/bougie.webp","images/passeport.webp", "images/voyage.webp"];
let numero = 0;
// La fonction ChangeSlide permet de changer le sens du caroussel
function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0){
        numero = arrayImg.length - 1;
    }else if (numero > arrayImg.length - 1){
        numero = 0;
    }
    // On change la source de l'image en fonction de la position du tableau arrayImg
    image.src = arrayImg[numero];
    
}
// La méthode setInterval appelle la fonction ChangeSlide toutes les 2.5s
setInterval("ChangeSlide(1)", 2500);