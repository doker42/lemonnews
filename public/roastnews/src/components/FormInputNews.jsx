import React from 'react'
import axios from 'axios'
import './../App.css';


class FormInputNews extends React.Component{

    state = {
        title: '',
        url: '',
        text: '',
    }

    handleChangeTitle = event => {
        this.setState({ title: event.target.value });
    }
    handleChangeUrl = event => {
        this.setState({ url: event.target.value });
    }
    handleChangeText = event => {
        this.setState({ text: event.target.value });
    }

    handleSubmit = event => {
        event.preventDefault();
    
        const title = this.state.title
        const url = this.state.url
        const text = this.state.text
      
        // axios.post('http://localhost:3030/posts/', { title, url, text })
        
        axios.post('http://lemonnews.example/addNews/', { title, url, text})
          .then(res => {
            // console.log(res);
            // console.log(res.data);
          })
    }

  render() {
    
    return (

        <div className='formnews'>
          
         <div className="inputnewstitle">
            <p className="text-left">Input News</p>   
         </div>
         <form onSubmit={this.handleSubmit} action="" className="inputnews">
            <table border="0">
                <tbody>
                    <tr>
                        <td>title</td>
                        <td>
                            <input id="news-title" name="title" onChange={this.handleChangeTitle} size="50" type="text"/>
                        </td>
                    </tr>
                    <tr height="10px"><td></td></tr>
                    <tr>
                        <td>url</td>
                        <td>
                            <input id="news-url" name="url" onChange={this.handleChangeUrl} size="50" type="text"/>
                        </td>
                    </tr>
                    <tr height="10px"><td></td></tr>
                    <tr>
                        <td>text</td>
                        <td>
                            <textarea id="news-text" name="text" onChange={this.handleChangeText} type="text" rows="4" cols="49"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input id="news-submit" type="submit" value="save news" className="btn btn-primary"/>
                        </td>
                    </tr>
                </tbody>
            </table>
         </form>

        </div>
    )
  }
}

export default FormInputNews;
