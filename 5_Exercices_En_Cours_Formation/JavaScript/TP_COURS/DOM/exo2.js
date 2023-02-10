let btn = document.querySelectorAll("button");
let div = document.querySelector("div");

function createDom(name, text, parent) {
  const markup = document.createElement(name);
  markup.textContent = text;
  parent.appendChild(markup);
  return markup;
}

btn.forEach((bouton) => {
  bouton.addEventListener("click", function () {

    if (bouton.id == "tous") {
    let html = createDom("p", "Du HTML", div);
        html.setAttribute("class", "htmlrem");
        let css = createDom("p", "Du CSS", div);
        css.setAttribute("class", "cssrem");
        let js = createDom("p", "Du JS", div);
        js.setAttribute("class", "jsrem");

    } else if (bouton.id == "html") {
      let htmlSupp = document.querySelectorAll(".htmlrem");
      if (htmlSupp.length !== 0) {
        htmlSupp.forEach(element => {
            element.remove();
        });
        
      } else {
        let html = createDom("p", "Du HTML", div);
        html.setAttribute("class", "htmlrem");
      }

    } else if (bouton.id == "css") {
      let cssSupp = document.querySelectorAll(".cssrem");
      if (cssSupp.length !== 0) {
        cssSupp.forEach(element => {
           element.remove(); 
        });
        
      } else {
        let css = createDom("p", "Du CSS", div);
        css.setAttribute("class", "cssrem");
      }

    } else if (bouton.id == "js") {
      let jsSupp = document.querySelectorAll(".jsrem");
      if (jsSupp.length !== 0) {
         jsSupp.forEach(element => {
            element.remove();
        });
        
      } else {
        let js = createDom("p", "Du JS", div);
        js.setAttribute("class", "jsrem");
      }
    }
  });
});
