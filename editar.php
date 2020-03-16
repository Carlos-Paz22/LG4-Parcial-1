<?php 
include('includes/db.php');
if(isset($_GET["id"])==false){//iset para validar parametros
 echo "Es necesario enviar un id";
 die; //  para ocultar el error para cortarlo como un break
}

$id =$_GET["id"];
$sql="select*from usuarios where id= $id";
$persona=DB::query($sql);

//var_dump($persona); ver lo que contiene persona
$persona=mysqli_fetch_object($persona);
//var_dump($persona->nombres);indicar que persona esta en el array

//if($persona==false){ funciona igual lo de abajo
    if(!$persona){

    echo "El usuario no existe";
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div>
            <h3>Editar Usuarios</h1>
        </div>
        <input type="hidden" name="id" value="<?= $persona->id ?>">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombres" size="70"value="<?= $persona->nombres ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email"size="70" value="<?= $persona->email ?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password"size="70" value="">
        </div>
        <?php  if($persona->estado == "activo"){  ?>
                    <input type="radio" name="estado" value="activo" checked>Activo<br>
                    <input type="radio" name="estado" value="inactivo">Inactivo
                <?php  }else{  ?>
                    <input type="radio" name="estado" value="activo" >Activo<br>
                    <input type="radio" name="estado" value="inactivo" checked>Inactivo
                <?php  }  ?>
        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>
</html>