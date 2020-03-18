import React, { Fragment } from "react";
import { Switch, Route, Redirect } from "react-router";

import Home from "../pages/Home";

export default class Routes extends React.Component {
  constructor(props) {
    super(props);

    this.state = {};
  }

  render() {
    return (
      <Fragment>
        <Switch>
          <Route path="/home" component={Home} />
          <Route path="/" render={() => <Redirect to="/home" />} />
        </Switch>
      </Fragment>
    );
  }
}
