let btns = document.querySelectorAll("button")
let div = document.querySelector("div")
let body = document.querySelector("body")

console.log(body.children);

function createDom(name, text, parent) {
    const markup = document.createElement(name);
    markup.textContent = text;
    parent.insertBefore(markup, body.children[0]);
    return markup;
  }

btns.forEach(btn => {
    btn.addEventListener("click", function(){
        if (btn.id == "header") {
            createDom("header", "header", body)
            btn.remove()
        } else if (btn.id == "main") {
            let main = document.createElement("main")
            main.textContent = "main"
            body.insertBefore(main, body.children[1])
            btn.remove()
        } else if (btn.id == "footer") {
            let foot = document.createElement("footer")
            foot.textContent= "footer"
            body.insertBefore(foot, body.children[2])
            btn.remove()
        }
    })
});