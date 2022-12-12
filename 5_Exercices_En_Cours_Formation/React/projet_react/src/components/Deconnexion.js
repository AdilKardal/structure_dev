import { redirect } from "react-router-dom";
import { Navigate } from "react-router-dom";


  function Deco() {
    localStorage.removeItem("connecte");

    return (
      <form>
        <button onClick={Deco} >
          Déconnexion
        </button>
      </form>
    );
}

export default Deco;