import React,{useState} from "react";

function Counter(){
    const[count, setCount] = useState(0)
    const[button, setButton] = useState()
  
    function add(e){
        setCount(count + 1)
        setButton(e.target.textContent)
    }
    
    function rem(e){
        setCount(count - 1)
        setButton(e.target.textContent)
    }

    return(
         <>
          <p>{count}</p>
        <button onClick={add}>+1</button>
        <button onClick={rem}>-1</button>  
        <p>Dernier bouton cliqué : {button}</p>  
         </>
         
    
    )
}

export default Counter