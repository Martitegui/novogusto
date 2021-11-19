<?php
    // recojo los valores que el usuario me envia
    $id = $_REQUEST["id"];
    $nom = $_REQUEST["nombre"];
    $img = $_REQUEST["imagen"];
    $des = $_REQUEST["descripcion"];
    $pre = $_REQUEST["precio"];

    /*
        1. Conectarme a la base de datos
        2. Construir un INSERT INTO.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
    $mysqli = new mysqli("localhost", "root", "", "novogusto");
    $sql = "insert into productos (id, nombre, imagen, descripcion, precio) values ('$id', '$nom', '$img', '$des', '$pre')";
    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: adminindex.php");

?>