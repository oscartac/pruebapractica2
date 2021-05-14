<?php
function show_items(){
  include "connect.php";

  $sql ="SELECT +FROM $tabla";
 $connection = new mysqli($servidor, $usuari, $contrasenya, $basededades);
 if ($connection->connect_error){
   return "Connexion fallida: ".$connection->connect_error;
   die();
 }
 $resultado = $connection->query($sql);
 $return = "";

 if($resultado->num_rows > 0){
   $return = "<table><tr><th>id</th><th>item</th><th>stock</th><th>eliminar</th></tr>";
   while($fila = $resultado->fetch_assoc()){
     $return = $return."
     <tr>
        <td>".$fila["id"]."</td>
        <td>".$fila["item"]."</td>
        <td>".$fila["stock"]."</td>
        <td><a href='db/delete_items.php?id=$fila[id]'>Eliminar item </a><td>
      <tr>";
   }
   $return = $return."</table";
 }else{
   return "No hay item en la tabla";
 }
 $connection->close();
 return $return;
}
 ?>
}
?>
