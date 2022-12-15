import React from 'react';
import Button from 'react-bootstrap/Button';
import { Link } from 'react-router-dom';

function Header() {
    return (
        <nav>
            <Link to="/"> <Button variant="outline-primary">Bonjour</Button> </Link>
            <Link to="/Toggle"> <Button variant="outline-primary">Toggle</Button> </Link>
            <Link to="/ButtonBootstrap"> <Button variant="outline-primary">Bootstrap</Button> </Link>
            <Link to="/Fruits"> <Button variant="outline-primary">Fruits</Button> </Link>
            <Link to="/Voiture"> <Button variant="outline-primary">Voiture</Button> </Link>
            <Link to="/Boutons"> <Button variant="outline-primary">But</Button> </Link>
            <Link to="/Clhook"> <Button variant="outline-primary">Heure</Button> </Link>
            <Link to="/Increment"> <Button variant="outline-primary">+ / -</Button> </Link>
            <Link to="/Calorie"> <Button variant="outline-primary">Besoin Calorique</Button> </Link>
            <Link to="/KanbanE"> <Button variant="outline-primary">Kanban</Button> </Link>
            <Link to="/Deconnexion"> <Button variant="danger">Deconnexion</Button> </Link>
        </nav>
    );
}

export default Header;