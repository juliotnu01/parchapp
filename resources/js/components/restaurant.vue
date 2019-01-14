<template>
<div class="contenedor">

		<div class="itemDelContenedor">
			<div class="card" v-for="restaurant in restaurants" style="width: 500px">

				<img  class="card-img-top" :src='"/imagenes/" + restaurant.imagenRuta' alt="Card image">
				<div class="card-body" >
				    <h4 class="card-title">{{restaurant.nombre}}</h4>
				    <p class="card-text">{{restaurant.descripcion}}</p>
				    <button class="btn btn-primary" data-toggle="collapse" 
				    :data-target='"#demo" + restaurant.id'>ver Usuarios</button>
				    <button class="btn btn-warning">Editar Restaurant</button>
				    <button class="btn btn-danger" v-on:click.prevent="deleteRestaurant(restaurant)">Eliminar Restaurant</button>

          </div>
					<div :id='"demo" + restaurant.id ' class="collapse" >
					<div v-for="user in users" >
            <ul>
              <li>
                {{user.email}}
              </li>
            </ul>
          </div>
					</div>
      </div>
    </div>
	
		</div>
</template>

<script>
  export default {
  	created(){
  		this.getRestaurants();
      this.getUser();
  	},
  	data (){
  		return {
  			restaurants: [],
        users: []
  			
  		}
  	},
  	methods: {
  		getRestaurants(){
  			var urlrestaurant = 'api/restaurants'
  			axios.get(urlrestaurant).then(response => {
  				this.restaurants = response.data
  			})
  		},
      getUser(){
        var urlrUsers = 'api/users'
        axios.get(urlrUsers).then(response => {
          this.users = response.data
        })
      },
  		deleteRestaurant(restaurant){
  			var url = 'api/restaurants/' + restaurant.id
  			axios.delete(url).then(response => {
  				this.getRestaurants();

  			}).catch(error => {
          console.log(error.response)
        })
  		},
  	}
  }
</script>
<style>
.itemDelContenedor{
justify-content: center;
	display: grid;
	grid-template-columns: repeat(auto-fill, 500px);
	grid-gap: 10px;
}
</style>
