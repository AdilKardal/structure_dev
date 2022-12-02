/*
    écrivez un test pour vérifié si la première lettre est en majuscule
*/

function upperCase(chaineATester)
{
   let regexp = /^[A-Z]/;
   console.log(regexp.test(chaineATester));
   console.log(chaineATester.match(regexp));
   if (regexp.test(chaineATester))
    {
      console.log("La première lettre est en majuscule");
    } 
    else
    {
      console.log("La première lettre n'est pas en maujuscule");
    }
}



upperCase('Abcd');
upperCase('abcd');
