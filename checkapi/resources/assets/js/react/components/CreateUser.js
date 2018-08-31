import React, { Component } from "react";

class Create extends Component {
  constructor() {
    super();
    
    this.handleSubmit = this.handleSubmit.bind(this);
    // this.handleChangeEmail = this.handleChangeEmail.bind(this);
   
  }

  handleSubmit(e) {
    e.preventDefault();
    
    let name = this.refs.name.value;
    let email = this.refs.email.value;
    if(!name)
    {
      alert('name cannot be null');
      return;
    }
    if(!email)
    {
      alert('email cannot be null')
      return;
    }

    if(!name && !email)
    {
      alert('name and email could not be null');
      return;
    }
    this.props.onClick(name,email);
    this.refs.form.reset();
  }

  render() {
    return (
      <div>
        <h1>Create User</h1>
        <form ref="form" onSubmit={this.handleSubmit}>
          <input type="text" ref="name"  placeholder="name"></input>
            <br></br>
          <input type="email" ref="email"  placeholder="email"></input>
          <br></br>
          <button>Save</button>
        </form>
      </div>
    );
  }
}
export default Create;
