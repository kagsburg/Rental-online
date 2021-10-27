import React from 'react';
import ReactDOM from 'react-dom';

import {BrowserRouter as Router, Switch, Route} from "react-router-dom";
import {Admin, Resource,Login} from 'react-admin';
import lb4Provider from 'react-admin-lb4';
import Header from './Header';
import Sidebar from './Sidebar'
import useScript from './useScript';
import './css/style.css';
import './css/themes/all-themes.css';
import './plugins/bootstrap/css/bootstrap.css'
import './plugins/jquery/jquery.js'
//import './plugins/bootstrap/js/bootstrap.js'
//import './js/admin.js'
//import './plugins/node-waves/waves.js'
import './js/pages/index.js'
import './js/demo.js'
import './plugins/jquery-countto/jquery.countTo.js'
const MyLoginPage = () => <Login backgroundImage="/background.jpg" />;
function Example() {
    useScript('./js/admin.js')
    return (
       
       // useScript('./plugins/node-waves/waves.js')
        <Router>
        <div className="wrapper">
        <Header/>
        <Sidebar/>
           {/* <Switch>
              <Route exact path="/">
              <Dash/>
              </Route>
            
              <Route path="/Add_Landlord" component={Add_Landlord}></Route>
              <Route path="/All_landlord" component={All_landlord}></Route>
              <Route path="/Edit_Landlord/:id" component={Edit_landlord}></Route>
              
            </Switch>
         
           
            <ToastContainer position="bottom-right"
              autoClose={5000}
              hideProgressBar={false}
              newestOnTop={false}
              closeOnClick
              rtl={false}
              pauseOnFocusLoss
              draggable
              pauseOnHover  /> */}
        </div> 
        </Router>
        // <Admin dataProvider={lb4Provider('http://localhost:8000/api')} >
        //     <Resource name="landlord"/>
        // </Admin>
       
        // <div className="container">
        //     <div className="row justify-content-center">
        //         <div className="col-md-8">
        //             <div className="card">
        //                 <div className="card-header">Example Component</div>

        //                 <div className="card-body">I'm an example component!</div>
        //             </div>
        //         </div>
        //     </div>
        // </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
