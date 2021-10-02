import React from 'react';
import ReactDOM from 'react-dom';
import {Admin, Resource,Login} from 'react-admin';
import lb4Provider from 'react-admin-lb4';
const MyLoginPage = () => <Login backgroundImage="/background.jpg" />;
function Example() {
    return (
        <Admin dataProvider={lb4Provider('http://localhost:8000/api')}>
            <Resource name="landlord"/>
        </Admin>
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
