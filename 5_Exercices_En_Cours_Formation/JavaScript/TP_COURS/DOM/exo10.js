let btn = document.querySelector("button");

btn.addEventListener("click", function () {
  let inputSelector = document.querySelector("input");
  console.log(inputSelector.value);

  (async function univ() {
    try {
      let response = await fetch(
        `http://universities.hipolabs.com/search?country=${inputSelector.value}`
      );
      let universite = await response.json();
      university(universite);
      console.log("data:", universite);
    } catch (err) {
      alert(err);
    }
  })();
});

console.log(document.body.children);

function university(universite) {
  let pSelector = document.querySelectorAll("p");
  if (universite.length > 50) {
    let nom_ville = document.createElement("input");
    document.body.append(nom_ville);

    nom_ville.addEventListener("input", function (e) {
      let ville = e.target.value;
      if (ville.length > 3) {
        universite.forEach((element) => {
          if (element.name.includes(ville)) {
            let pCreate = document.createElement("p");
            pCreate.textContent = element.name;
            document.body.append(pCreate);
          }
        });
      } else {
        pSelector.forEach((element) => {
          element.remove();
        });
      }
    });
    // nom_ville = prompt("Trop d'universités, choisir une ville");
  } else {
    universite.forEach((element) => {
      let pCreate = document.createElement("p");
      pCreate.textContent = element.name;
      document.body.append(pCreate);
    });
  }

  console.log(pSelector);
  if (pSelector.length !== 0) {
    pSelector.forEach((element) => {
      element.remove();
    });
  }
}
