class Personnage{
    constructor(pseudo, classe, sante, attaque, niveau = 1) {
  this.pseudo = pseudo;
  this.classe = classe;
  this.sante = sante;
  this.attaque = attaque;
  this.niveau = niveau;
}
  evoluer(){
    this.niveau++
    console.log(`${this.pseudo} passe au niveau ${this.niveau}`);
  };
  verifierSante(){
    if (this.sante <= 0) {
        this.sante = 0
        console.log(`${this.pseudo} a perdu `);
    } else {
        console.log(`il lui reste ${this.sante} points de vie`)
    }
  };
  get informations(){
    console.log(`${this.pseudo} ${this.classe} à ${this.sante} points de vie et est au niveau ${this.niveau}`)
  }
}

class Magicien extends Personnage {
    constructor(pseudo, classe, sante, attaque, niveau){
        super(pseudo, "Magicien",170,90,1)
    }
    attaquer(personnage){
        personnage.sante = personnage.sante - this.attaque
        console.log(`${this.pseudo} attaque ${personnage.pseudo} en lancant un sort (${this.attaque} degats).`);
        this.evoluer()
        personnage.verifierSante()
    }
    coupSpecial(personnage){
        personnage.sante = personnage.sante - (this.attaque *5)
        console.log(`${this.pseudo} attaque ${personnage.pseudo} avec son coup spécial puissance des arcanes (${this.attaque*5} degats).`);
        this.evoluer()
        personnage.verifierSante()
    }
}

class Guerrier extends Personnage {
    constructor(pseudo, classe, sante, attaque, niveau){
        super(pseudo, "Guerrier",350,50,1)
    }
    attaquer(personnage){
        personnage.sante = personnage.sante - this.attaque
        console.log(`${this.pseudo} attaque ${personnage.pseudo} avec son épée (${this.attaque} degats).`);
        this.evoluer()
        personnage.verifierSante()
    }
    coupSpecial(personnage){
        personnage.sante = personnage.sante - (this.attaque *5)
        console.log(`${this.pseudo} attaque ${personnage.pseudo} avec son coup spécial haches de guerre (${this.attaque*5} degats).`);
        this.evoluer()
        personnage.verifierSante()
    }
}

let gandalf = new Guerrier("Gandalf")
let aragorn = new Magicien("Houdini")

console.log(aragorn.informations);
console.log(gandalf.informations);
gandalf.attaquer(aragorn);
console.log(aragorn.informations);
aragorn.attaquer(gandalf);
console.log(gandalf.informations);
gandalf.coupSpecial(aragorn);



