import React, { useState } from "react";

function Toggle() {
  const [toggle, setToggle] = useState();

  function changeBtn() {
    let btn = document.getElementById("bouton")
    if (toggle !== "blue") {
      setToggle(btn.style.backgroundColor = "blue");
    } else {
      setToggle(btn.style.backgroundColor = "red");
    }
  }

  return (
    <button id="bouton" onClick={changeBtn}>Toggle</button>
  );
}

export default Toggle;
