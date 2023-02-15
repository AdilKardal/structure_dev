// filter & reduce
let array = []
for(let i=0; i<10; i++){
    array.push(Math.round(Math.random()*50))
}

let result = array.filter(num => num > 10);
let somme = array.reduce(myFunc);

function myFunc(total, num) {
  return total + num;
}

console.log(array);
console.log(somme);
console.log(result);

