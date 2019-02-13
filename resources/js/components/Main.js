import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Route, Link, NavLink} from 'react-router-dom';
import SignUpForm from './pages/SignUpForm';
import SignInForm from './pages/SignInForm';
import RecoverPassword from './pages/RecoverPassword';
import './App.css';

/* An example React component */
class Main extends Component {
  render() {
    return (
      <Router>

      <div className="App">
        <div className="App__Aside"></div>
        <div className="App__Form">

          <Route exact path="/" component={SignUpForm}>
          </Route>

          <Route path="/sign-in" component={SignInForm}>
          </Route>

          <Route path="/forgot-password" component={RecoverPassword}>
          </Route>

        </div>
      </div>

      </Router>

    );
  }
}

export default Main;

/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";
*/

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}
