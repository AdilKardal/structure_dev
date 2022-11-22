let choice = prompt(
  "Choisis entre : Boule de feu (40 degats) - Trait de glaçe (35 degats) - Chaîne d'éclair (25 degats)"
);

try {
  switch (choice.toLowerCase()) {
    case "boule de feu":
      alert("Vous avez choisi Boule de feu qui inflige 40 degats");
      break;
    case "trait de glace":
      alert("Vous avez choisi Trait de glace qui inflige 35 degats");
      break;
    case "chaine d'eclair":
      alert("Vous avez choisi Chaine d'eclair qui inflige 25 degats");
      break;
      default :
      throw new Error("Les autres sorts ne sont pas de votre niveau")
  }
} catch(e) {
    alert(e)
}
