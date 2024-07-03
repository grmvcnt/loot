import * as React from "react";
import './index.css'
import ReactDOM from 'react-dom/client'
import {createBrowserRouter, Link, RouterProvider,} from "react-router-dom";
import App from "./App.jsx";
import About from "./Pages/About/About.jsx";

const router = createBrowserRouter([
    {
        path: "/",
        element: <App/>,
    },
    {
        path: "about",
        element: <About/>,
    },
]);

ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <RouterProvider router={router}/>
    </React.StrictMode>,
)
