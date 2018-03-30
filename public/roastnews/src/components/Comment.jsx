import React from 'react'
import './../App.css';

class Comment extends React.Component{

//   constructor(props){
//     super(props)
//   }

  render(){

    const { data } = this.props

    return (

        <div className='commentitem container'>

                <div className="card-body">

                  <h5 className="card-title text-left grey">{data.username}</h5>

                  <p className="card-text text-left">{data.text}</p>   

                </div>

        </div>
    )
  }
}

export default Comment;