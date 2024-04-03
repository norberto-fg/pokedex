const app = new Vue({
  el: '#app',
  data: {
    info: null,
    pokemonName: ''
  },
  computed:{
    
  },
  methods: {
    reset: function() {
      
    },
    search: function(){
      console.log(this.pokemonName);
      //*/
      axios
      .get('https://pokeapi.co/api/v2/pokemon/'+this.pokemonName)
      .then(response => (this.info = response));
      //*/
    }
  },
  mounted () {
    
  }
});