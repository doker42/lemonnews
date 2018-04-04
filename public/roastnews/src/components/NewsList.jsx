import React from 'react'
import './../App.css'
import NewsItem from './NewsItem.jsx'
import axios from 'axios'


class NewsList extends React.Component{

  state = {
    news: []
  }

  componentDidMount() {
    axios.get('http://api.lemonnews.example/getNews/')
    // axios.get('http://lemonnews.zzz.com.ua/public/getNews')
    
      .then(res => {
        const news = res.data;
        // console.log('news + ' + news[0].title)
        console.log('news + ' + news)
        
        this.setState({ news });
      })
  }

  render(){

    const newsElem = this.state.news.map(data => 
      <div key={data.id}> <NewsItem data = { data } /> </div>
    )
    
    return (

        <div className='newslist container'>
           
         <h3>NewsList</h3>

          <div>

            { newsElem }

          </div>

        </div>
    )
  }
}

export default NewsList;