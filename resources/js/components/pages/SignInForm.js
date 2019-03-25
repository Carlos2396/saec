import React, { Component } from 'react';
import {BrowserRouter as Router, Route, Link, NavLink} from 'react-router-dom';


class SignInForm extends Component {
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
        <form className="FormFields" onSubmit={this.handleSubmit} action="http://127.0.0.1:8000/api/login" method="post">
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> E-mail </label>
            <input type="email" id="email" className="FormField__Input" placeholder="Ingresa tu e-mail institucional" name="email" />
          </div>
          <div className="FormField">
            <label className="FormField__Label" htmlFor="name"> Contraseña </label>
            <input type="password" id="password" className="FormField__Input" placeholder="Ingresa tu contraseña" name="password" />
              <Link to="/forgot-password" className="FormField__Link--Password"> ¿Olvidaste tú contraseña? </Link>
        </div>
          <div className="FormField">
            <button className="FormField__Button mr-20"> Iniciar Sesión </button>
            <Link exact to="/" className="FormField__Link"> Crear una cuenta </Link>
          </div>
        </form>
      </div>
    </div>
    );
  }
}

export default SignInForm;
