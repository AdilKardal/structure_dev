let choice = prompt("Souhaitez vous afficher du texte ? (O/N)");
let text = document.querySelector("p");

window.addEventListener("load", function () {
  text.style.visibility = "hidden";
  if (choice === "o" || choice === "O") {
    text.style.visibility = "visible";
  } else if (choice === "n" || choice === "N") {
    text.style.visibility = "hidden";
  } else {
    alert("Tapez O ou N");
    text.style.visibility = "hidden";
  }
});
