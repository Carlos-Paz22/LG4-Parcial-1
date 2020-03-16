<?php 
    include('includes/db.php');
    if(isset($_GET['estado']) == TRUE){
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){
            $es = "inactivo";
        }else{
            $es = "activo";
        }
        $sql = "UPDATE usuarios set estado='$es' WHERE id='$id'";
    }else{
        $id = $_POST["id"];
        $nombre = $_POST["nombres"]; 
        $email = $_POST["email"];
        $password = $_POST["password"];
        $estado = $_POST['estado'];
       

      
        if(isset($id) == false){
            
            $estado = "activo";
            $sql = "insert into usuarios(nombres,email,password,estado) values('$nombre','$email',MD5('$password'),'$estado')"; 
        }else{
         
            if($password != ""){
                
                $sql = "UPDATE usuarios set nombres='$nombre',email='$email',password=MD5('$password'),estado='$estado' WHERE id='$id'";
            }else{
                
                $sql = "UPDATE usuarios set nombres='$nombre',email='$email',estado='$estado' WHERE id='$id'";
            }
        }
    
}
header('Location: index.php');

    DB::query($sql);
   
?>