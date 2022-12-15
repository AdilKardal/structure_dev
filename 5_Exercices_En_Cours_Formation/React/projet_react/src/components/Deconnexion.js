 function Deco() {
  function deconnexion(){
     localStorage.removeItem("connecte");
  }
  
    return (
      <form>
        <button onClick={deconnexion} >
          Déconnexion
        </button>
      </form>
    );
}

export default Deco;