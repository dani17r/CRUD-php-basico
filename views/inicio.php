
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
				<div class="col-4">
					<h2 class="espac">Registro de usuarios</h2>
					<form @submit.prevent="login()">
						<div class="form-group">
							<input autocomplete="off" v-if="editar" v-model="task" type="text" class="form-control" id="1" placeholder="tarea - edicion">
							<input autocomplete="off" v-else v-model="task" type="text" class="form-control" id="1" placeholder="tarea">
						</div>
						<div class="form-group">
							<textarea autocomplete="off" v-if="editar" v-model="description" type="text" class="form-control" id="2" placeholder="descripcion - edicion" rows="2" ></textarea>
							<textarea autocomplete="off" v-else v-model="description" type="text" class="form-control" id="2" placeholder="descripcion" rows="2" ></textarea>
						</div>
						<input v-if="editar" @click="update" class="btn btn-success w-100" value="Guardar">
						<button v-else type="submit" class="btn btn-success w-100">Aceptar</button>
						<input type="button" v-if="editar" @click="limpiar" class="btn btn-secondary w-100 marg-top-8" value="cancelar">
					</form>
					<span class="w-100 marg-top-8 menss">{{ mensaje }}</span>
				</div>
				<!--  -->
				<div class="col-8">
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
										<td>
											<button @click="_editar(item[0],item[1],item[2])" class="btn btn-success">Editar</button>
										</td>
										<td>
											<button @click="_eliminar(item[0])" class="btn btn-danger">Eliminar</button>
										</td>
									</tr>
					  </tbody>
					</table>
				</div>
				<!--  -->
			</div>
		</div>
		<!--  -->
	</div>

		<script src="public/js/jquery-3.3.1.min.js" ></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/vue.js"></script>
		<script src="public/js/vue-resource.js"></script>
		<script src="public/js/crud.js"></script>
	</body>
</html>
