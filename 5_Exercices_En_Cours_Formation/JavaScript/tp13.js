//Déclarer un tableau qui en contient deux, ajouter un troisème tableau.
// à l'aide de splice

//Un tableau à deux dimensions
let array = [
    ["titi", "tata", "toto"],
    ["jiji", "jaja", "jojo"],
  ];
  array.splice(2,0, ["mimi", "mama", "momo"])

  console.table(array)