let title = document.querySelectorAll("h2");
let affiche = true;

title.forEach(h2 => {
    h2.addEventListener("click", function () {
  if (affiche) {
    h2.nextElementSibling.style.display = "none";
    affiche = false;
  } else if (affiche == false) {
    h2.nextElementSibling.style.display = "block";
    affiche = true;
  }
});
});

