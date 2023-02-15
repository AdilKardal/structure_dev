let image = document.querySelector(".avanav");
let deco = document.querySelector(".deco");
let affiche = true

image.addEventListener("click", function(){
    if (affiche){
        deco.style.display = "block"
        affiche = false
    } else if (affiche == false ){
        deco.style.display = "none"
        affiche = true
    }
})