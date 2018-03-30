import React from 'react'
import './css/header.css'
import './../App.css';

class Header extends React.Component{

  render(){
    
    return (

        <div className='header container'>
          {/* <div className="w50">
            <h4 className="title text-left">roastNEWS</h4>
          </div> */}

          <div className="row">
            <div className="col-4">
              <h4 className="title text-left">roastNEWS</h4>   
            </div>
            <div className="col-4"></div>
            <div className="col-4">
              <button className="btn btn-light right">login</button>           
            </div>  
          </div>

        {/* <img src={gossip} className="App-logo" width="100" height="50" alt="logo"/> */}
            
        </div>
    )
  }
}

export default Header;