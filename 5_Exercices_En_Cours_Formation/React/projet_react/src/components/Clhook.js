import React, {useState} from "react";

function Clhook(){
    const[time,setTime] = useState(new Date());
    setInterval(() => setTime(new Date()),1000);

  return (
    <div>
    <h2>Il est {time.toLocaleTimeString()}</h2>
  </div>
)  
}


export default Clhook;