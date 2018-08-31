import React, { Component } from "react";
import axios from "axios";

export default class Edit extends Component {
  constructor(props) {
    super(props);
    this.submitForm = this.submitForm.bind(this);
  }

  submitForm(event) {
    event.preventDefault();
    
    this.props.onUpdate(this.props.item,this.refs.name.value,this.refs.email.value);
    
  }

  render() {
    return (
      <div>
        <form onSubmit={this.submitForm}>
          <div>
            <label>Name</label>
            <input
              type="text"
              ref="name"
              defaultValue={this.props.item.name}
              name="name"
            />
          </div>
          <div>
            <label>Email</label>
            <input
              type="email"
              ref="email"
              name="name"
              defaultValue={this.props.item.email}
            />
          </div>

          <button type="submit">Update</button>
        </form>
      </div>
    );
  }
}
