const app = new Vue({
  el:'#app',
  data:{
    arrDisc:[],
  },
  created(){
    this.callApi('api.php')
  },
  methods:{
    callApi(url){
      axios.get(url)
      .then((resp)=>{
        console.log(resp);
        this.arrDisc.push(resp.data);
        console.log(this.arrDisc);
      })
      .catch((err)=>{
        console.log(err);
      })
    },
    
  }
})