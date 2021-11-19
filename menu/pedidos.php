
<?php
    session_start();

    $mysqli = new mysqli("localhost", "root", "", "novogusto");

   
    $sql= "SELECT max(numpedido) as maxpedido FROM pedidos";

    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
    $maxpedido = $row["maxpedido"]+1;
    }
    echo "$maxpedido<br>";
    echo "-------<br>";
    foreach($_SESSION as $pedido) {
    $idproductos = $pedido["id"];
    $nombres = $pedido["nombre"];
    $precios = $pedido["precio"];
        echo "$idproductos<br>";
        echo "$nombres<br>";
        echo "$precios<br>";
        echo "-----------<br>";

    $sql = "INSERT INTO pedidos (id, nombre, precio, numpedido) VALUES ('$idproductos', '$nombres', '$precios', '$maxpedido')";
    echo "sql: $sql";
    $mysqli->query($sql);
  
};
    session_destroy();
 
    header("location: tienda-online.php");

?>