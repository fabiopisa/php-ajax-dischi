const app = new Vue({
  el:'#app',
  data:{
    arrDisc:[],
    arrGenres:[],
    strValGenre:'all',
    apiURL:'http://localhost/php-intro/php-ajax-dischi/api.php'
  },
  created(){
    this.callApi()
  },
  methods:{
    callApi(){
      axios.get(this.apiURL,{
        params:{
          genre:this.strValGenre
        }
      })
      .then((resp)=>{
        console.log(resp);
        this.arrDisc = (resp.data.albums);
        this.arrGenres = (resp.data.genres);
        console.log(this.arrDisc);
        console.log(this.arrGenres);
      })
      .catch((err)=>{
        console.log(err);
      })
    },
    
  }
})