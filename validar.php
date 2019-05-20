<?php
if(isset($_POST['usuario']) and isset($_POST['password'])){
   include('conexion.php');
   $nombredeusuario=mysqli_real_escape_string($conexion, $_POST['usuario']);
   $password=mysqli_real_escape_string($conexion, $_POST['password']);
   $comprobacion_del_nombre='SELECT * FROM registros WHERE nombre = "'.nombredeusuario.'"';
   $comprobacion=$conexion->query($comprobacion_del_nombre);
   if($comprobacion=>num_rows>0){
       
   }
}else{
    header('location: ./');
}
?>