<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

if ($nombre == NULL or $apellido == NULL) {
  echo "Debes introducir un nombre y un apellido...";
}else{
  function insert_items($nombre, $apellido){
    include "connect.php";
    $sql = "INSERT INTO $tabla (nombre, apellido) VALUES('$nombre', '$apellido')";
    $connection = new mysqli($servidor, $usuari, $contrsenya, $basededades);
    if($connection->connect_error){
      return "Conexion fallida:" .$connection->connect_error;
      die();
    }
    echo$nombre;
    echo$apellido;
    if($connection->query($sql) ===TRUE){
      echo "Vale, registro añadido";
    }else{
      echo"Error: " .$sql . "<br>" .$connection->error;
    }
    $connection->close();
    header("Location: ..");
    die();
  }
  ?>


?>
