import React from 'react'
import axios from 'axios'
import './../App.css';


class FormInputComment extends React.Component{

    constructor(props){
        super(props)
        this.state = {
            text: '',
            username: ''
        }
      }

    

    handleChangeComment = event => {
        this.setState({ text: event.target.value });
    }
    handleChangeName = event => {
        this.setState({ username: event.target.value });
    }

    handleSubmit = event => {
        event.preventDefault();
    
        const onBut = this.props.onButtonClick
        const text = this.state.text
        const username = this.state.username
        const article_id = this.props.id
        const user_id = this.props.user_id
      
        // axios.post('http://localhost:3030/posts/', { title, url, text })
        axios.post('http://api.lemonnews.example/addComment/', { username, text, article_id, user_id })
          .then(res => {
            console.log(res);
            console.log(res.data);
            onBut();
          })
    }

  render(){

    
    return (

        <div className='formcomment'>

            <form onSubmit={this.handleSubmit}>

                <div className="form-group">
                    <input type="text" name="username" className="form-control" id="InputName" onChange={this.handleChangeName} placeholder="Input your NAME"/>
                </div>

                <div className="form-group">
                    <textarea type="text" name="text" className="form-control" id="InputComment" onChange={this.handleChangeComment} />
                    <small id="CommentHelp" className="form-text text-muted"> Add here your comment</small>
                </div>

                <button type="submit"   className="btn btn-secondary btn-sm">Submit</button>
            </form>

        </div>
    )
   }
}

export default FormInputComment;
