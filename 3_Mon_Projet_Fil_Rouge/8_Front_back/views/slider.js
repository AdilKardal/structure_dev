let slide = ["images/bebe.jpeg", "images/bougie.jpeg","images/passeport.jpeg", "images/voyage.jpeg"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0){
        numero = slide.length - 1;
    }else if (numero > slide.length - 1){
        numero = 0;
    }
    document.getElementById("slide").src = slide[numero];
    
}
setInterval("ChangeSlide(1)", 2500);