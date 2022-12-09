import Modal  from 'react-bootstrap/Modal';
import Button from 'react-bootstrap/Button';

function Example() {

  return (
    <>
    <section>
         <Button variant="outline-primary">Primary</Button>
      <Button variant="outline-secondary">Secondary</Button>
      <Button variant="outline-success">Success</Button>

      <div className="modal show" style={{ display: 'block', position: 'initial', color:'black'}}>
      <Modal.Dialog>
        <Modal.Header closeButton>
          <Modal.Title>Modal title</Modal.Title>
        </Modal.Header>

        <Modal.Body>
          <p>Modal body text goes here.</p>
        </Modal.Body>

        <Modal.Footer>
          <Button variant="secondary">Close</Button>
          <Button variant="primary">Save changes</Button>
        </Modal.Footer>
      </Modal.Dialog>
    </div>
    </section>
     
    </>
  );
}

export default Example;