let btn = document.querySelector("button")
let div = document.querySelector("div")

function createDom(name, text, parent) {
    const markup = document.createElement(name);
    markup.textContent = text;
    parent.appendChild(markup);
    return markup;
  }

  btn.addEventListener("click", function(){
    createDom("p", "Texte ajouté", div)
  })

