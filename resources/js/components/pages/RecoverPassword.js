import React, { Component } from 'react';
import {BrowserRouter as Router, Route, Link, NavLink} from 'react-router-dom';

class RecoverPassword extends Component {
  render(){
    return(
      <div>
      <div className="PageSwitcher">
        <NavLink exact to="/forgot-password" activeClassName="PageSwitcher__Item--Active" className="PageSwitcher__Item">Recuperar contraseña</NavLink>
      </div>

      <div className="FormTitle">
        <NavLink to="/forgot-password" activeClassName="FormTitle__Link--Active" className="FormTitle__Link">Recuperar contraseña</NavLink>
      </div>

      <div className="FormCenter">
        <form className="FormFields" onSubmit={this.handleSubmit}>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> E-mail </label>
            <input type="email" id="email" className="FormField__Input" placeholder="Ingresa tu e-mail institucional" name="email" />
          </div>
          <div className="FormField">
            <button className="FormField__Button mr-20"> Enviar correo </button>
            <Link to="/sign-in" className="FormField__Link"> Pagina de inicio </Link>
          </div>
        </form>
      </div>
    </div>
    );
  }
}

export default RecoverPassword;
