import logo from "../assets/logo.svg";
import "../styles/App.css";
import {Routes, Route} from 'react-router-dom'
import Fruits from "./Fruits";
import Button from "./Boutons";
import Hellook from "./InputHook";
import Clhook from "./Clhook";
import Counter from "./Increment";
import Toggle from "./Toggle";
import Garage from "./Voiture";
import Example from "./ButtonBootstrap";
import'bootstrap/dist/css/bootstrap.min.css';
import Header from "./Header";
import Calorie from "./Calorie";
import Connect from "./Login";
import Deco from "./Deconnexion";
import Kanban from "./KanbanE";


function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />

        {!localStorage.getItem("connecte") ? (<Connect />) : (
<>      <Header />
        <Routes>
          <Route exact path="/" element={<Hellook />}/>   
          <Route exact path="/Increment" element={<Counter />}/>  
          <Route exact path="/Voiture" element={<Garage />}/>  
          <Route exact path="/ButtonBootstrap" element={<Example />}/>  
          <Route exact path="/Boutons" element={<Button />}/>  
          <Route exact path="/Toggle" element={<Toggle />}/>
          <Route exact path="/Clhook" element={<Clhook />}/>  
          <Route exact path="/Fruits" element={<Fruits />}/>  
          <Route exact path="/Calorie" element={<Calorie />}/> 
          <Route exact path="/KanbanE" element={<Kanban />}/> 
          <Route exact path="/Deconnexion" element={<Deco />}/> 
          
        </Routes>
        
</>)}
        
       
        {/* <p> Edit <code>src/App.js</code> and save to reload.</p>   */}
        {/* <a className="App-link" href="https://reactjs.org" target="_blank" rel="noopener noreferrer" > Learn React </a> */}
      </header>
    </div>
  );
}

export default App;

