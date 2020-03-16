<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Crear usuarios<h2>


				<form action="guardar_persona.php" method="post" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" >
						<span class="label-input100">Username</span>
						<input class="input100"size="70" type="text" name="nombres" placeholder="Enter username"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100" >Email </span>
						<input class="input100" size="70"type="text" name="email" placeholder="Enter email"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="password is required">
						<span class="label-input100" >Password </span>
						<input class="input100" size="70"type="password" name="password" placeholder="Enter email"required>
						<span class="focus-input100"></span>
					</div>
					
					

	
					<div>
						<button type="submit">Guardar</button>
						<a  href="index.php">Mostrar datos registrados</a>
					
					</div>
					
					
						
				</form>
	
</body>
</html>