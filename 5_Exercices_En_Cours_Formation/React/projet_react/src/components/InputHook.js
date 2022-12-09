import React,{useState} from "react";

function Hellook(){
    const[prenom, setName] = useState()
const handleChange = (e) => {
    setName(e.target.value)
}
    
return (
        <div>
            <h1>Bonjour,{prenom}</h1>
          <input onChange={handleChange}/>
        </div>
      );
}

export default Hellook