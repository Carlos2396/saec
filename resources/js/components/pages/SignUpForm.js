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
        <form className="FormFields" onSubmit={this.handleSubmit} action="http://127.0.0.1:8000/api/register" method="post">
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> Nombre </label>
            <input type="text" id="name" className="FormField__Input" placeholder="Ingresa tu nombre" name="name" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="lastname"> Apellidos </label>
            <input type="text" id="lastname" className="FormField__Input" placeholder="Ingresa tus apellidos" name="lastname" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="id"> Matrícula </label>
            <input type="id" id="id" className="FormField__Input" placeholder="Ingresa tu matrícula institucional" name="id" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="password"> Contraseña </label>
            <input type="password" id="password" className="FormField__Input" placeholder="Ingresa tu contraseña" name="password" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="password_confirmation"> Confirmar contraseña </label>
            <input type="password" id="password_confirmation" className="FormField__Input" placeholder="Ingresa de nuevo tu contraseña" name="password_confirmation" />
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
