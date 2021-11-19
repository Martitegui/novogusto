<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "novogusto");
    $sql = "SELECT id, nombre, imagen FROM listacompra";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        if(isset($_REQUEST["id"]) and $_REQUEST["id"] == $row['id']){
            echo"<form method='get' action='update.php'>";
            echo"<input type='text' id='producto' name='producto'>";
            echo"<input type='text' id='unidades' name='unidades'>";
            echo"<input type='hidden'name='id'value='".$row["id"]."'>";
            echo"<button type='submit'value='Enviar'>Enviar</button>";
            echo"</form>";
            
        } else {
        echo "id: ".$row["id"];
        echo " Nombre: ".$row["nombre"];
        echo " Unidades: ". $row["unidades"];
        echo " <a href='index.php?id=".$row['id']."'>Modificar</a>";
        echo " <a href='delete.php?id=".$row['id']."'>Borrar</a>";
        echo "<br>";
        }
    }

   

    
    $mysqli->close();
?>