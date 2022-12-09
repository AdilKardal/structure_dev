import React from "react";

class Clock extends React.Component {
  constructor(props) {
    super(props);
    this.state = { date: new Date() };
  }
  componentDidMount() {
    this.timerID = setInterval(() => this.tic(), 1000);
  }

//   componentWillUnmount() {
//     clearInterval(this.timerID);
//   }

  tic() {
    this.setState({ date: new Date() });
  }
  render() {
    return (
      <div>
        <h2>Il est {this.state.date.toLocaleTimeString()}</h2>
      </div>
    );
  }
}

export default Clock