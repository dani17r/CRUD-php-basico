<?php include 'controllers/crud/read.php'; ?>

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
					<?php if (isset($_GET['id'])) {
						$id = ($_GET['id']);
						$nombre = ($_GET['name']);
						$apellido = ($_GET['lastname']);
						$email = ($_GET['email']);
						$usuario = ($_GET['username']);
						$contra = ($_GET['password']);
						?>
							<h1 class="espac">Actualizacion de usuarios</h1>
				        <form action="controllers/crud/update.php" method="post">
									<div class="form-group form-list">
										<input type="text" class="form-control" name="name" value="<?php echo $nombre; ?>">
									</div>
									<div class="form-group form-list">
										<input type="text" class="form-control" name="lastname" value="<?php echo $apellido; ?>">
									</div>
									<div class="form-group form-list">
										<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
									</div>
									<div class="form-group form-list">
										<input type="text" class="form-control" name="username" value="<?php echo $usuario; ?>">
									</div>
									<div class="form-group form-list">
										<input type="password" class="form-control" name="password" value="<?php echo $contra; ?>">
									</div>
									<button class="btn btn-primary w-100 butt" name="id" value="<?php echo $id; ?>" type="submit">Aceptar</button>
									<a type="button" class="btn btn-secondary w-100 button-a" href="index.php">Cerrar</a>
								</form>
							<?php }else{ ?>
								<h1 class="espac">Registro de usuarios</h1>
								<form action="controllers/crud/create.php" method="post">
									<div class="form-group">
										<input type="text" class="form-control" id="1" name="name" placeholder="Nombre">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="2" name="lastname" placeholder="apellido">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="3" name="email" placeholder="correo">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="4" name="username" placeholder="usuario">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="5" name="password" placeholder="contraseña">
									</div>
									<button type="submit" class="btn btn-primary w-100">Aceptar</button>
								</form>
					<?php }?>
				</div>
			</div>
		</div>
		<br><br>
		<!--  -->

		<?php if (!$dato_devuelto=="") { ?>
		<div class="container">
			<div class="row justify-content-center">
				<h2>Lista de usuario</h2>
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">apellido</th>
				      <th scope="col">email</th>
				      <th scope="col">usuario</th>
				      <th scope="col"></th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
						<?php foreach($mostrar as $ver):
							$id = $ver['id'];
							$nombre = $ver['name'];
							$apellido = $ver['lastname'];
							$email = $ver['email'];
							$usuario = $ver['username'];
							$contra = $ver['password'];
							?>
						    <tr>
						      <td><?php echo $id; ?></td>
						      <td><?php echo $nombre; ?></td>
						      <td><?php echo $apellido; ?></td>
									<td><?php echo $email; ?></td>
						      <td><?php echo $usuario; ?></td>
									<td>
										<a href="index.php?id=<?php echo $id; ?>&name=<?php echo $nombre; ?>&lastname=<?php echo $apellido; ?>&email=<?php echo $email; ?>&username=<?php echo $usuario; ?>&password=<?php echo $contra; ?>" type="button" class="btn btn-success">Editar</a>
									</td>
									<td>
										<a href="controllers/crud/delete.php?id=<?php echo $id; ?>" type="button" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>
					  <?php endforeach; ?>
				  </tbody>
				</table>
			</div>
		</div>
		<?php	} ?>

		<script src="public/js/jquery-3.3.1.min.js" ></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
	</body>
</html>
