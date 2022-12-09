import React from "react";

class Input extends React.Component {
    constructor(props) {
      super(props);
      this.state = {prenom : ''};
    }

    render() {
      return (
        <div>
            <h1>Bonjour, {this.state.prenom}</h1>
          <input type="text" value={this.state.prenom} onChange={e => this.setState({prenom:e.target.value})}/>
        </div>
      );
    }
  }

export default Input