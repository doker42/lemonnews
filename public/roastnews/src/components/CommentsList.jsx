import React from 'react'
import './../App.css'
import Comment from './Comment.jsx'
import axios from 'axios'


class CommentsList extends React.Component{
    constructor(props){
        super(props)
        this.state = {
            comments: [],
          }
      }
      
  componentDidMount() {
  
    axios.get('http://lemonnews.example/getComments/', { params: { id: this.props.id}})
      .then(res => {
        const comments = res.data;
        this.setState({ comments });
      })
  }

  render(){

    const comment = this.state.comments.map(data => 
      <div key={data.id}> <Comment data = { data } /> </div>
    )
    
    return (

        <div className='newslist container'>
           
         <h5>CommentsList  </h5>

          <div>

            { comment }

          </div>

        </div>
    )
  }
}

export default CommentsList;