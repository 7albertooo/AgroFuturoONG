<?php
function SeleccionarDatos($nombreIngresado,$passwordIngresado,$conexion){
   
   //Buscamos el usuario en la base de datos
   $stm= $conexion->prepare("SELECT username,password FROM usuarios WHERE username=?");
   $stm-> bind_param("s",$nombreIngresado);
   $stm->execute();
   $resultado=$stm->get_result();

   //Verificamos que el usuario existe
   if($fila = $resultado->fetch_assoc()){
    //Comparamos la contraseña enviada con la registrada
      return(password_verify($passwordIngresado,$fila["password"]));
    
   }
   //Si el usuario no existe aún
   return false;
}
?>