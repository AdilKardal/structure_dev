// - Créez un constructeur de “Stagiaire” avec pour attributs : nom, prénom, age, ville de naissance
// - Ce constructeur aura pour méthode “sePresenter” qui affichera tous les attributs nom, prénom,
// age et le nom de la ville de naissance
// - Creéz un constructeur de “Ville” avec pour attribut : nom, nombre d’habitants, pays
// - Créez deux objets de “stagiaire” et créez autant d’objets de “ville” que necessaire pour pouvoir
// assigner ces objets à l’attribut “ville” de naissance”.

function Stagiaire(nom, prenom, age, villeNaissance) {
  this.nom = nom;
  this.prenom = prenom;
  this.age = age;
  this.villeNaissance = villeNaissance;
  this.SePresenter = () => {
    console.log(`Bonjour je m'appelle ${this.prenom} ${this.nom}. \n J'ai ${this.age} ans et je suis né à ${this.villeNaissance.nom}`);
  };
}

function Ville(nom, nbHabitants, pays) {
  this.nom = nom;
  this.nbHabitants = nbHabitants;
  this.pays = pays;
}

let clamart = new Ville("Clamart",35652,"France")
let chatenay = new Ville("Chatenay",35120,"France")
let stagiaire = new Stagiaire("Kardal", "Adil", "26", clamart);
let stagiaire2 = new Stagiaire("Kard", "Ad", "22", chatenay);


stagiaire.SePresenter()
