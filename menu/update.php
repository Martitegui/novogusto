<?php
    /*
    1. Recoger los valores del usuario
    2. Conectarme a la bbdd
    3. Crear la sentencia UPDATE ..
    4. Ejecutamos
    5. Nos dirija a la pagina de index.php
    */
    $id = $_REQUEST["id"];
    $nom = $_REQUEST["nombre"];
    $img = $_REQUEST["imagen"];
    $des = $_REQUEST["descripcion"];
    $pre = $_REQUEST["precio"];
  
    

    $mysqli = new mysqli("localhost", "root", "", "novogusto");
    $sql = "UPDATE productos SET nombre = '$nom', imagen = '$img', descripcion = '$des', precio = '$pre' WHERE id = $id";

    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: adminindex.php");


?>