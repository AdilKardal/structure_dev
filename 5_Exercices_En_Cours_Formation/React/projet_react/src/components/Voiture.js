import React, { useState } from "react"

function Garage() {

    const [marque, setVoiture] = useState()
    const [model, setModel] = useState()

    console.log(document.body.children);
    const handleClick = (e) => {
        // console.log(e.target.parentElement.children[2].value)
        let modelVoiture = e.target.parentElement.children[2].value
        let nameVoiture = e.target.parentElement.children[4].value
        setVoiture(nameVoiture)
        setModel(modelVoiture)
    }

    return (
        <div>
            <h2>Quel véhicule est dans mon garage ?</h2>

            <label>La marque de la voiture : </label>
            <input></input>
            <label>Le nom de la voiture : </label>
            <input></input>

            <button onClick={handleClick}>Ajouter la voiture</button>

            <p> Il y a une {model} {marque}</p>
        </div>
    )
}



export default Garage