import React, { Component } from 'react';
import {BrowserRouter as Router, Route, Link, NavLink} from 'react-router-dom';

class SignUpForm extends Component {
  render(){
    return(
      <div>
      <div className="PageSwitcher">
        <NavLink to="/sign-in" activeClassName="PageSwitcher__Item--Active" className="PageSwitcher__Item">Iniciar sesión</NavLink>
        <NavLink exact to="/" activeClassName="PageSwitcher__Item--Active" className="PageSwitcher__Item">Registrarse</NavLink>
      </div>

      <div className="FormTitle">
        <NavLink to="/sign-in" activeClassName="FormTitle__Link--Active" className="FormTitle__Link">Iniciar sesión</NavLink>
        ó
        <NavLink exact to="/" activeClassName="FormTitle__Link--Active" className="FormTitle__Link">Registrarse</NavLink>
      </div>

      <div className="FormCenter">
        <form className="FormFields" onSubmit={this.handleSubmit}>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> Nombre </label>
            <input type="text" id="name" className="FormField__Input" placeholder="Ingresa tu nombre completo" name="name" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> Contraseña </label>
            <input type="password" id="password" className="FormField__Input" placeholder="Ingresa tu contraseña" name="password" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> E-mail </label>
            <input type="email" id="email" className="FormField__Input" placeholder="Ingresa tu correo institucional" name="email" />
          </div>

          <div className="FormField">
            <label className="FormField__CheckboxLabel">
              <input className="FormField__Checkbox" type="checkbox" name="hasAgreed" /> Acepto todos los <a href="#" className="FormField__TermsLink">Terminos y condiciones</a>
            </label>
          </div>

          <div className="FormField">
            <button className="FormField__Button mr-20"> Registrarse </button>
            <Link to="/sign-in" className="FormField__Link"> Ya soy miembro </Link>
          </div>
        </form>
      </div>
    </div>
    );
  }
}

export default SignUpForm;
