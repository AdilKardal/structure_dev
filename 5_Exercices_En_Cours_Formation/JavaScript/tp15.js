// let h22 = document.querySelector("h2");
// let liens = document.querySelectorAll("a");
// let text = document.querySelector(".text");

// console.dir(h22)
// console.log(liens)
// console.log(text)

// let h2 = document.querySelector("h2")
// let lien = document.querySelectorAll("a")

// h2.textContent = "Modification h2"
// lien[1].textContent = "2eme lien"
// lien[2].textContent = "3eme lien"


// console.log(h2)
// console.log(lien)

let h1 = document.createElement("h1");
let div = document.createElement("div");
h1.textContent = "Bienvenue";
document.querySelector("header").prepend(div);
div.append(h1);


let image = document.querySelector("img")
image.remove()


