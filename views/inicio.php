
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Administrador de usuarios</title>

		<link rel="shortcut icon" href="public/img/Logo-Diclase.ico">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/css/estilos.css">
	</head>
	<body>
	<div id="main">

		<nav class="navbar navbar-light my-color">
		  <a class="navbar-brand" href="#">
		    <img src="public/img/Logo-Diclase.ico" width="30" height="30" alt="">
		  </a>
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link active a" href="index.php">Inicio</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link a">estadisticas</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link a">contenido</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link a">Opciones</a>
			  </li>
			</ul>
		</nav>
		<br>
		<!--  -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-6">
					<h1 class="espac">Registro de usuarios</h1>
					<form @submit.prevent="login()" action="controllers/crud/create.php" method="post">
						<div class="form-group">
							<input autocomplete="off" v-model="task" type="text" class="form-control" id="1" placeholder="tarea">
						</div>
						<div class="form-group">
							<input autocomplete="off" v-model="description" type="text" class="form-control" id="2" placeholder="descripcion">
						</div>
						<button type="submit" class="btn btn-primary w-100">Aceptar</button>
					</form>
				</div>
			</div>
		</div>
		<br><br>
		<!--  -->


		<div class="container">
			<div class="row justify-content-center">
				<h2>Lista de usuario</h2>
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">tarea</th>
				      <th scope="col">descripcion</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody v-for="item in lists">
						 <tr v-if="!item==0">
						      <td>{{ item[0] }}</td>
						      <td>{{ item[1] }}</td>
						      <td>{{ item[2] }}</td>
									<?php
										if (isset($_GET['id'])) {
											$id = ($_GET['id']);
											$tarea = ($_GET['task']);
											$description = ($_GET['description']);
										}
									?>
									<td>
										<a href="index.php?id=<?php echo $id; ?>&task=<?php echo $tarea; ?>&description=<?php echo $description; ?>" type="button" class="btn btn-success">Editar</a>
									</td>
									<td>
										<a href="controllers/crud/delete.php?id=<?php echo $id; ?>" type="button" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>
				  </tbody>
				</table>
			</div>
		</div>

	</div>

		<script src="public/js/jquery-3.3.1.min.js" ></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script>
			new Vue({
				el: '#main',
				created: function() {
						this.getUsers()
				},
				data:{
					task:'',
					description:'',
					lists:[]
				},
				methods: {
					getUsers: function() {
						this.$http.get('controllers/url/json-read.php').then(function(response){
							var datos = response.data
							if (datos==0) {
								this.lists=0
							}else {
								this.lists = response.data
							}
						})
					},
					login: function() {
						this.$http.post('controllers/crud/create.php',{
							task: this.task,
							description: this.description
						})
						this.getUsers()
					}
				}
			})
		</script>
	</body>
</html>
