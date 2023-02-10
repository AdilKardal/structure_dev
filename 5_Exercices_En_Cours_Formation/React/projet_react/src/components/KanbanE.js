import "../styles/dnd.css";
import {Draggable, Droppable} from 'react-drag-and-drop'
import React, { useState } from "react";

function Kanban() {
  const [id, setId] = useState([
    { nom: "tache1", cat: "ToDo" },
    { nom: "tache2", cat: "Done" },
    { nom: "tache3", cat: "ToDo" },
    { nom: "tache4", cat: "ToDo" },
    { nom: "tache5", cat: "Done" },
    { nom: "tache6", cat: "Doing" },
    { nom: "tache7", cat: "Doing" },
  ]);

  var colonnes = {
    ToDo: [],
    Doing: [],
    Done: [],
  };

  id.map((tache) => {
    colonnes[tache.cat].push(
<Draggable>
      <span id="taches">
        {/* <button id="arrow">&larr;</button> */}
        {tache.nom}
        {/* <button id="arrow">&rarr;</button> */} 
        <button id="btn" onClick={deleteTask}>X</button>
    </span>
</Draggable>
    );
  });

  function addTask(e) {
    console.log(e.target.parentElement.children[1].value);
    e.preventDefault();
    setId([ ...id,{ nom: e.target.parentElement.children[1].value, cat: "ToDo" },]);
  }

  function deleteTask(e){
      let deleteTask = e.target.parentElement.textContent.slice( 0, e.target.parentElement.textContent.indexOf("X"));
      const copie = id.filter((task) => task.nom !== deleteTask); 
      setId(copie);
  }

  // function changeCol(){
     
  // }
  return (
    <>
        <form>
         <label>Ajouter une tache :</label> 
          <input></input>
          <button onClick={addTask}>Ajouter</button>
        </form> 
      <section>
 
          <div id="todo">
          ToDo
        <p>{colonnes.ToDo}</p>
        </div>
        
        <div id="doing">
          Doing
        <p>{colonnes.Doing}</p>
        </div>

        <div id="done">
          Done
       <p>{colonnes.Done}</p>
        </div>

      </section>
    </>
  );
}

export default Kanban;
