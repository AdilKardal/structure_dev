import React, {useState} from 'react';
import Modal  from 'react-bootstrap/Modal';
import Button from 'react-bootstrap/Button';


function Calorie() {

  const [result, setResult] = useState()
  const handleClick = (e) => {
    
    let homme = e.target.parentElement.parentElement.children[1].children[1].children[0].children[0].checked
    let femme = e.target.parentElement.parentElement.children[1].children[1].children[1].children[0].checked
    let age = Number(e.target.parentElement.parentElement.children[1].children[1].children[2].children[0].value)
    let taille = Number(e.target.parentElement.parentElement.children[1].children[1].children[3].children[0].value)
    let poids = Number(e.target.parentElement.parentElement.children[1].children[1].children[4].children[0].value)
    let activite = Number(e.target.parentElement.parentElement.children[1].children[1].children[5].children[0].value)
   
   console.log(homme, age, taille, poids, activite)
   if (!homme && !femme) {
    return alert("Choisissez un sexe");
   } else if(homme && femme) {
    return alert("Un seul sexe");
   }
   
   if (homme){
    setResult(Math.round(66.5 + (13.75 * poids) + (5 * taille) - (6.77 * age) * activite));
    console.log(Math.round(66.5 + (13.75 * poids) + (5 * taille) - (6.77 * age) * activite));
   } else{
    setResult(Math.round(665.1 + (9.56 * poids) + (1.85 * taille) - (4.67 * age) * activite));
    console.log(result);
   }

  }
    return (
        <div
      className="modal show"
      style={{ display: 'block', position: 'initial', color: 'black'}}
    >
      <Modal.Dialog>

        <Modal.Header closeButton>
          <Modal.Title>Calcul du besoin calorique</Modal.Title>
        </Modal.Header>

        <Modal.Body>
          <p>Informations à renseigner</p>
          <form>
          <label>Homme<input type="checkbox"/></label>
          <label>Femme<input type="checkbox"/></label>
          <label>Age:<input type="text"/></label>
          <label>Taille:<input placeholder='En cm..'/></label>
          <label>Poids:<input placeholder='En kg..'/></label>
          <label>Activite:<input type="text"/></label>
          </form>

          
        </Modal.Body>

        <Modal.Footer>
          <p>{result}</p>
          <Button variant="primary" onClick={handleClick}>Calculer</Button>
        </Modal.Footer>

      </Modal.Dialog>
    </div>
    );
}

export default Calorie;
