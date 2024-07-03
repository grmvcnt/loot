import './App.css';
import React from "react";
import {Link} from "react-router-dom";

function App() {

    return (
        <>
            <h1>App</h1>
            <Link to="/about">redirect to About</Link>
        </>
    )
}

export default App
