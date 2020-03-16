<?php 
include('includes/db.php');
//DB::init();

	

	 //$conexion= new mysqli($host, $user, $password, $bd);
	 $sql="SELECT * from usuarios";
	 $result=DB::query($sql);
 ?>


<!DOCTYPE html>
<html>

<body>

<br>

	<table border="1" >
	<tr>
	<td colspan = 5 ><h2>Datos guardados en la base<h2></td>
	</tr>
	
		<tr>
	

			<td>id</td>
			<td>nombres</td>
			<td>email</td>
			<td>estado</td>
			<td>acciones</td>
			
		</tr>

		<?php while($mostrar=mysqli_fetch_array($result)){?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombres'] ?></td>	
			<td><?php echo $mostrar['email'] ?></td>
			<td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar_persona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar_persona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $mostrar['id']?>">Editar</a>
					<a href="eliminar.php?id=<?= $mostrar['id']?>">Eliminar</a>
                </td>
		</tr>
	
		<?php } ?>
	 
	</table>
	<br>
	<a  href="crear.php">Registrar nuevo usuario</a>
</body>
</html>