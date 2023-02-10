console.log(document.body.children);
let btn = document.querySelector("button");
let body = document.querySelector("body");

btn.addEventListener("click", function () {
  let inputSelector = document.querySelector("input");
  let update = document.createElement("button");
  let suppr = document.createElement("button");
  let text = document.createElement("p");
  update.textContent = "Valider";
  body.insertBefore(update, body.children[3]);
  suppr.textContent = "Supprimer";
  body.insertBefore(suppr, body.children[4]);
  text.textContent = inputSelector.value;
  body.insertBefore(text, body.children[3]);
  console.log(inputSelector.value);

  update.addEventListener("click", function () {
    text.style.color = "green";
  });

  suppr.addEventListener("click", function () {
    text.style.textDecoration = "line-through";
    text.style.color = "red";
  });
});
