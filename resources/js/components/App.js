import React, { Component } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import PostsList from "./posts/PostsList";
import ScrollTop from "./common/ScrollToTop/ScrollToTop";

export default class App extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <PostsList />
                    </div>
                </div>
                <div className="row justify-content-center fixed-bottom">
                    <div className="col-md-12 text-center">
                        <ScrollTop />
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById("root")) {
    ReactDOM.render(<App />, document.getElementById("root"));
}
