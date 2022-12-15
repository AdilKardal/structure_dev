import React, {useState} from 'react';

function Connect(){
    const [login, setLogin] = useState()
    const bonLogin = "adil"
    localStorage.setItem('login', JSON.stringify(bonLogin))

    function handleSubmit(){
        JSON.parse(localStorage.getItem("login"))
        if (login === bonLogin) {
            localStorage.setItem('connecte', true)
            
        } else {
            alert("Login incorrect")
           
        }
    }
return(
    <>
        <h1>Connexion</h1>
        <form onSubmit={handleSubmit}>
            <input value={login} onChange={(e) => setLogin(e.target.value)} placeholder='Login'/>
            <button type='submit'>Connexion</button>
        </form>
      
    </>
)
}

export default Connect

// import { useState } from "react";

// const Storage = () => {
//   const [login, setLogin] = useState("");
//   const good = "jordy";
//   localStorage.setItem('login', JSON.stringify(good));

//   function handleClick(){
//     JSON.parse(localStorage.getItem("login"))
//     if (login === good) {
//         localStorage.setItem("connecter", true)
//     } else {
//         alert("Erreur")
//     }
//   }

//   return (
//     <form onSubmit={handleClick}>
//         <h1>Se connecter</h1>
//       <input type="text" value={login} onChange={(e) => setLogin(e.target.value)}/>
//       <button type="submit">Connexion</button>
//     </form>
//   );
// };

// export default Storage;