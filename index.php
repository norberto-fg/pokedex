<!DOCTYPE html>
<html>
<head>
  <title>Pokedex</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
  <script src="js/app.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  <div id="app" class="form-group">
    <div class="row">
      <header>
        <h1>Pokedex</h1>
      </header>  
    </div>
    <div class="row">
      <div class="col col-md-8 offset-md-1">
        <input type="text" class="form-control" v-model="pokemonName">
      </div>
      <div class="col col-md-2">
        <input type="button"  class="btn btn-primary" value="Search" v-on:click="search()">
      </div>  
    </div>
    
  	<div class="row" v-if="info">
      <div class="col">
        <h2>Pokemon name: <b>{{ info.data.name }} </b> </h2>  
      </div>
    </div>
    <div class="row" v-if="info">
      <div class="col">
        <h3>*** Characteristics</h3>
        <label>Height: <b>{{ info.data.height }}</b></label>
        <label>Weight: <b>{{ info.data.weight }}</b></label>
        <label>Base experience: <b>{{ info.data.base_experience }}</b></label>  
      </div>
    </div>
    <div class="row" v-if="info" style="padding-top: 2em;">
      <div class="col">
        <h3>*** Abilities</h3>
        <ul>
          <li v-for="item in info.data.abilities"> {{ item.ability.name }} </li>
        </ul>
        <img :src="info.data.sprites.front_default" style="width: 5em; height: 5em;">  
      </div>
  	</div>
  </div>
</body>
</html>