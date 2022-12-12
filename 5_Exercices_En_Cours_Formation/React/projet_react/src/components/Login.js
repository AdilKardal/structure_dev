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