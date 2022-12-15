import React, { Component, useState, useEffect } from "react";

import "../style/App.css";

export default class App extends Component {
  // Ici l'état de mon Kanban (mes tâches + leur catégorie)
  state = {
    tasks: JSON.parse(localStorage.getItem("dataKey")),
  };

  // déterminer quel item se fait drag
  onDragStart = (event, id) => {
    // console.log('dragstart:', id);
    event.dataTransfer.setData("id", id);
  };

  // empêcher le reload pdt le drag
  onDragOver = (event) => {
    event.preventDefault();
  };

  // changer la tâche de catégorie
  onDrop = (event, cat) => {
    // récupérer l'id de l'item déposer
    let id = event.dataTransfer.getData("id");
    // vérifier si l'item a changé de catégorie
    let tasks = this.state.tasks.filter((task) => {
      if (task.name === id) {
        task.category = cat;
      }
      return task;
    });
    // faire la mise à jour
    this.setState({
      ...this.state,
      tasks,
    });
    //update le localStorage
    localStorage.setItem(`dataKey`, JSON.stringify(this.state.tasks));
  };

  // ajouter une tâche
  addTask = (e) => {
    // récupérer le nom de la tâche
    const taskName = e.target.parentElement.children[0].children[0].value;
    if (!taskName) {
      // si pas de name return et afficher msg erreur
      document.querySelector(
        ".outpout"
      ).textContent = `Merci de rentrer le nom de la tâche.`;
      return;
    }
    console.log("process to add task", taskName);
    let data = { name: taskName, category: "new", bgcolor: "transparent" };
    var temp = false;

    // Si la tâche existe déjà annuler le process
    this.state.tasks.forEach((t) => {
      if (t.name === taskName) return (temp = true);
    });

    if (temp) {
      // cancel process
      document.querySelector(
        ".outpout"
      ).textContent = `Je ne peux pas ajouter ${taskName} car la tâche existe déjà..`;
      e.preventDefault()
      return;
    } else {
      // complete process
      this.state.tasks.push(data);
      console.log(`${taskName} has been sucessfully added to kanban`);
      console.table(this.state.tasks);
      e.target.parentElement.children[0].children[0].value = "";
      document.querySelector(
        ".outpout"
      ).textContent = `${taskName} a été ajouté !`;
      localStorage.setItem(`dataKey`, JSON.stringify(this.state.tasks));
    }
  };

  render() {
    // initialisation de mon rendu
    var tasks = {
      new: [],
      wip: [],
      complete: [],
      abandon: [],
    };
    // mettre les items de mon state sur mon html
    this.state.tasks.forEach((t) => {
      tasks[t.category].push(
        <div
          key={t.name}
          onDragStart={(e) => this.onDragStart(e, t.name)}
          draggable
          className="draggable"
          style={{ backgroundColor: t.bgcolor }}
        >
          {t.name}
        </div>
      );
    });

    // faire la connexion pour afficher mon kanban
    const login = (e) => {
      let username = e.target.parentElement.children[0].children[0].value;
      console.log(username);
      if (!localStorage.getItem(`user${username}`)) {
        console.log(`Le compte ${username} n'existe pas !`);
      } else {
        console.log(`Connexion autorisé pour ${username}`);
        localStorage.setItem("token", true);
      }
    };

    return (
      <>
        {localStorage.getItem("token") ? ( //si pas de connexion rester sur la page de connexion autrement afficher le kanban
          <>
            <section className="container-drag">
              <h2 className="header">KANBAN</h2>

              <article>
                <form className="addTask">
                  <label>
                    Task Name<input></input>
                  </label>
                  <button onClick={(e) => this.addTask(e)}>Add task !</button>
                  <p className="outpout"></p>
                </form>

                <div
                  className="new"
                  onDragOver={(e) => this.onDragOver(e)}
                  onDrop={(e) => {
                    this.onDrop(e, "new");
                  }}
                >
                  <span className="task-header">NOUVEAU</span>
                  {tasks.new}
                </div>

                <div
                  className="wip"
                  onDragOver={(e) => this.onDragOver(e)}
                  onDrop={(e) => {
                    this.onDrop(e, "wip");
                  }}
                >
                  <span className="task-header">EN COURS</span>
                  {tasks.wip}
                </div>

                <div
                  className="completed"
                  onDragOver={(e) => this.onDragOver(e)}
                  onDrop={(e) => this.onDrop(e, "complete")}
                >
                  <span className="task-header">TERMINÉ</span>
                  {tasks.complete}
                </div>

                <div
                  className="abandon"
                  onDragOver={(e) => this.onDragOver(e)}
                  onDrop={(e) => this.onDrop(e, "abandon")}
                >
                  <span className="task-header">ABANDON</span>
                  {tasks.abandon}
                </div>
              </article>
            </section>
          </>
        ) : ( // si pas connecter alors rester sur la page de connexion
          <>
            <form className="login">
              <label>
                Pseudo : <input></input>
              </label>
              <button onClick={login}>Se connecter</button>
            </form>
          </>
        )}
      </>
    );
  }
}

// state = {
//   tasks: [
//     { name: "Learn Angular", category: "new", bgcolor: "transparent" },
//     { name: "React", category: "wip", bgcolor: "transparent" },
//     { name: "Vue", category: "new", bgcolor: "transparent" },
//     { name: "JS", category: "complete", bgcolor: "transparent" }
//   ]
// }
