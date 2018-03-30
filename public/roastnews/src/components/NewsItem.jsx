import React from 'react'
import './../App.css';
import FormInputComment from './FormInputComment.jsx'
import CommentsList from './CommentsList.jsx'


class NewsItem extends React.Component{

  constructor(props){
    super(props)
    this.state = {
        isOpen: false,
        isOpenComments: false
    }
  }

  render(){

    const { data } = this.props

    const formInputComment = this.state.isOpen && <div id="formcomment"> 
    <FormInputComment id={data.id}
      onButtonClick= { this.handleFormInputComments }
    /> 
    </div> 
    
    const listComments = this.state.isOpenComments && <div id="listComments"> <CommentsList id={data.id}/> </div> 
    

    return (

        <div className='newsitem container'>
              <div className="card">
                <div className="card-body">
                  <h5 className="card-title text-left grey">{data.id} {data.title}</h5>
                  <p className="card-text text-left">{data.text}</p>
                  <p className="card-link text-left"><a href={data.url} className="card-link">Go to source</a></p>
                  <p className="card-link text-left mrglft">
                    <button onClick={this.handleFormInputComments} className="btn btn-link btn-sm font">
                    { !this.state.isOpen ? 'Comment on' : 'Close Comment Form' }
                    </button>
                    <button onClick={this.handleCommentsList} className="btn btn-link btn-sm font">
                    { !this.state.isOpenComments ? 'Read Comments ' + data.count  : 'Close Comments ' + data.count }
                    </button>
                  </p>                  
                </div>
                   { formInputComment }
                   { listComments}
              </div>
        </div>
    )
  }

  handleFormInputComments = () => {
    this.setState({
        isOpen: !this.state.isOpen,
    })
  }

  handleCommentsList = () => {
    this.setState({
        isOpenComments: !this.state.isOpenComments,
    })
  }

}

export default NewsItem;