function fruits(){
   let table = ["fraise", "framboise", "banane", "poire"]

    return (
      <>
        <h1>Qu'est ce que j'ai dans mon panier ?</h1>
        <p>{table.map((fruit) => <li>J'ai une {fruit} dans mon panier</li>)}</p>  
      </>
    );
}

export default fruits

