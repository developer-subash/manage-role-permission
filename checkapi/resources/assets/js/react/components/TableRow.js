import React, { Component } from "react";
import Edit from "./Edit";

export default class TableRow extends Component {
  constructor(props) {
    super(props);
    this.state = {
      is_edit: false
    };
    this.deleteUser = this.deleteUser.bind(this);
    this.edit = this.edit.bind(this);
    this.updateUser = this.updateUser.bind(this);
   
  }

  updateUser(item,name,email)
  {
    // this.props.users.indexOf(item);
    // alert('table row');
    this.props.updateUser(item,name,email);
    this.setState({ is_edit: false });
  }

  edit() {
    this.setState({
      is_edit: true
    });
  }

  deleteUser(i, event) {
    this.props.onDelete(this.props.item);
  }

  render() {
    return (
        <tbody>
        {this.state.is_edit ? (
          <Edit onUpdate={this.updateUser} item={this.props.item} />
        ) : (
          <tr key={this.props.key}>
            <td>{this.props.item.id}</td>
            <td>{this.props.item.name}</td>
            <td>{this.props.item.email}</td>
            <td>
              <button className="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button" item={this.props.item} onClick={this.edit}>
                Edit
              </button>
              <button
                type="button"
                onClick={this.deleteUser.bind(this.props.item, this.props.key)}
              >
                Delete
              </button>
            </td>
            </tr >
        )}
        </tbody>
        
     
    );
  }
}
