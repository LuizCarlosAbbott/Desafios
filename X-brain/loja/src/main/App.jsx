import "./App.css";
import React, { Component } from "react";
import { HashRouter } from "react-router-dom";
import { Switch } from "react-router";
import Routes from "./Routes";

export default class App extends Component {
  render() {
    return (
      // <h1>AD</h1>
      <HashRouter>
        <Switch>
          <Routes />
        </Switch>
      </HashRouter>
    );
  }
}
