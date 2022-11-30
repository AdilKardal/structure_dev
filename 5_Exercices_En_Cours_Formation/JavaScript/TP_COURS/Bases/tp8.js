let heure = parseInt(prompt("Quelle heure est il ?"));
function hour(heure) {
  if (heure >= 0 && heure < 24) {
    if (heure < 13) {
      console.log("C'est le matin");
    } else if (heure < 18) {
      console.log("C'est l'aprem");
    } else {
      console.log("c'est le soir");
    }
  } else {
    return console.log("et non");
  }
}

hour(heure);

