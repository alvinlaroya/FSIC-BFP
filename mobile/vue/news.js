var app = new Vue({
    el: '#news',
    data: {
      news: [],
    },
    mounted(){
      axios.get('http://newsapi.org/v2/top-headlines?country=ph&apiKey=c948915906cf4ef1a44f02fe585efe08').then(response => {
        this.news = response.data.articles;
        console.log(this.news)
      }).catch(e);
      alert(e) 
    }
});