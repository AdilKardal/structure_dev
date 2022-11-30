let prenom = prompt("Quel est votre prenom ?")

switch (prenom) {
    case "Thomas": 
    case "Guigui":
    case "Ruben":
      alert("Vous etes un garcon");
      break;
   case "Lea": 
   case "Julie": 
   case "Sophie":
    alert("Vous etes une fille");
    break;
    default:
    alert("et non");
}

