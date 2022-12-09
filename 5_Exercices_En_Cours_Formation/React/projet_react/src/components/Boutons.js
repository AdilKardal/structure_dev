function button(e) {

   function clicBut(e){
    return function(){(e ? alert('but') : alert('et non'))}
   }

  return (
    <>
      <button onClick={clicBut(true)}>Buuut</button>
      <button onClick={clicBut(false)}>C'est dans les gradins</button>
    </>
  );
}

export default button;
