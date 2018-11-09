<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Php</title>
	</head>
	<body>
	<form action="controllers/crud/create.php" method="post">
		<label>Nombre<input type="text" name="name" placeholder="Nombre"></label>
		<br><br>
		<label>apellido<input type="text" name="lastname" placeholder="apellido"></label>
		<br><br>
		<label>email<input type="email" name="email" placeholder="correo"></label>
		<br><br>
		<label>usuario<input type="text" name="username" placeholder="usuario"></label>
		<br><br>
		<label>contraseña<input type="password" name="password" placeholder="contraseña"></label>
		<br><br>
		<button type="submit">Aceptar</button>
	</form><br>

		<?php include 'controllers/crud/read.php'; ?>
		<table>Lista
		    <?php foreach($mostrar as $ver):
					$id = $ver['id'];
					$nombre = $ver['name'];
					$apellido = $ver['lastname'];
					$email = $ver['email'];
					$usuario = $ver['username'];
					$contra = $ver['password'];
				?>
		      <ul>
		        <li>
							<b><?php echo $nombre ?></b>
							<b><?php echo $apellido ?></b>
							<b><?php echo $email ?></b>
							<b><?php echo $usuario ?></b>
		            <button>
									<a href="controllers/crud/delete.php?id=<?php echo $id; ?>">Eliminar</a>
								</button>
		            <button>
									<a href="index.php?id=<?php echo $id; ?>&name=<?php echo $nombre; ?>&lastname=<?php echo $apellido; ?>&email=<?php echo $email; ?>&username=<?php echo $usuario; ?>&password=<?php echo $contra; ?>">Editar</a>
								</button>
						</li>
		      </ul>
		    <?php endforeach; ?>
				<?php if (isset($_GET['id'],$_GET['name'],$_GET['lastname'],$_GET['email'],$_GET['username'],$_GET['password'])) {
					$id = ($_GET['id']);
					$nombre = ($_GET['name']);
					$apellido = ($_GET['lastname']);
					$email = ($_GET['email']);
					$usuario = ($_GET['username']);
					$contra = ($_GET['password']);
					?>
					<form action="controllers/crud/update.php" method="post">
						<input name="name" value="<?php echo $nombre; ?>">
						<input name="lastname" value="<?php echo $apellido; ?>">
						<input name="email" value="<?php echo $email; ?>">
						<input name="username" value="<?php echo $usuario; ?>">
						<input name="password" value="<?php echo $contra; ?>">
						<button name="id" value="<?php echo $id; ?>" type="submit">Aceptar</button>
						<a href="index.php">Cancelar</a>
					</form>
				<?php } ?>

		</table>

	</body>
</html>
