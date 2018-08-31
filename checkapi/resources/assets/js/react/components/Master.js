import React, { Component } from "react";
import axios from "axios";
import TableRow from "./TableRow";
import Create from "./CreateUser";

export default class Master extends Component {
  constructor(props) {
    super(props);
    this.state = {
      list: [],
      is_create_form: false
    };
    this.deleteUser = this.deleteUser.bind(this);
    this.createForm = this.createForm.bind(this);
    this.addUser = this.addUser.bind(this);
    this.updateUser = this.updateUser.bind(this);
  }

  getUsers() {
    return this.state.list;
  }

  updateUser(item, name, email) {
    let index = this.state.list.indexOf(item);
    const user = this.state.list[index];
    user.name = name;
    user.email = email;

    const userslist = this.state.list;
    userslist[index] = user;
    this.setState({ list: userslist });
  }

  deleteUser(item) {
    let email = item.email;
   if(confirm("Are you sure To delete"))
     {

       axios.post(window.api.DeleteUser,{
         email : email
        })
            .then((res) => {

              let index = this.state.list.indexOf(item);
              let users = this.state.list;
              users.splice(index, 1);
              this.setState({ list: users });


            })
            .catch((err) => {

            })
            .finally((err) => {

            }) 


     
    }
  }
  createForm(e) {
    e.preventDefault();
    const state = this.state.is_create_form;
    this.setState({
      is_create_form: true
    });
  }

  componentWillMount() {
    
    axios
      .post(window.api.getPaged)
      .then(res => {
        this.setState({
          list: res.data.data
        });
      })
      .catch(err => {
        console.log(err);
      })
      .finally(err => {});
  }
  addUser(name, email) {

    axios
      .post(window.api.CreateUser, {
        name: name,
        email: email
      })
      .then(res => {
        if (res.data.success) {
          const list = this.getUsers();
          this.setState({
            list: this.state.list.concat(res.data.data)
          });
        }
      })
      .catch(err => {
       if(!err.success)
       {
         alert('must be unique Email Address');
       }
      });
  }

  render() {
    return (
      <div>
        <h2>Crud Using Laravel and React</h2>
        <div>
          <button onClick={this.createForm}>Add new</button>

          {this.state.is_create_form ? <Create onClick={this.addUser} /> : " "}
        </div>
        <table>
          <thead>
            <tr>
              <th>SN</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>

          {this.state.list.map((item,i) => (
            <TableRow
              updateUser={this.updateUser}
              users={this.state.list}
              key={i}
              onDelete={this.deleteUser}
              item={item}
            />
          ))}
        </table>
      </div>
    );
  }
}
