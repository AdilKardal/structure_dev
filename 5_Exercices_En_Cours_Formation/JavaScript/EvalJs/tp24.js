var justePrix = Math.floor(Math.random() * 100);
var nombre;
var nbEssais;


do {
    for (nbEssais=0; nbEssais<=10; nbEssais++) {

    nombre = Number(prompt("Entrez un nombre entre 0 et 100"));

    if (nombre === justePrix) {alert("Bravo");
    break;
    }
    else if (nombre > justePrix) {
        alert("trop grand");
    }
    else if (nombre < justePrix) {
        alert("trop petit");
        
    }else {
        alert("Rééssayez");
        nbEssais --;
}
}
    
alert(`Bien joué, le juste prix est ${justePrix}€ \n Vous avez trouvé en ${nbEssais} essais`);
    
} while (confirm("Une autre partie ?"));