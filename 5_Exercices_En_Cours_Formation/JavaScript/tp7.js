// Une fonction qui calcule l'imc d'une personne,
//     Deux paramètre poid et taille
//     la formule poid en kg/ taille² en metre

// Une entrée en kg
// une entrée en cm donc conversion en m
// faire un calcul pour l'imc et afficher le résultat à l'arrondis supérieur
// 1 chiffre après la virgule.


function imc(){
    let taille = parseInt(prompt("Votre taille en cm"))
    let poids = parseInt(prompt("Votre poids en kg"))
    taille = taille / 100
    let imc = poids / taille * taille
    return Math.round(imc)
}

alert(`Votre imc est de ${imc()}`)