<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda online de alimentación para profesionales, chefs y particulares">
    <meta name="author" content="Alejandro Martitegui">
    <title>Novogusto :: Carrito</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>
    <script src="../js/jquery.cookiebar.js"></script>
    <script>
      
        /* -- Slider -- */

   

        /* -- Política de Cookies -- */

        $(document).ready(function() {
            $.cookieBar();
        });

    </script>
<style>
    #cs {
    text-decoration: none;
    color: black;
    position: fixed;
    float: right;
    margin-left: 30px;
    background-color: white;
    border: solid;
    border-color: #A2292E;
    padding: 40px;
}
#cs:hover {
    color: #FFFFFF;
    border-color:#A2292E ;
    background-color:#000000 ;
}
    #cuerpo {
     background-color: white;
     background-image: none;
   }
    .adminito a{
    background-color: #EA8597;
    border-color: black;
    color: black;
    }
    .adminito a:hover{
          color: black;
          background-color: white!important;
          
        }
</style>
<body>
<header>
        <div class="contenedor">
            <h1>
                <a href="../index.html"><img src="../img/logo_novogusto.svg" alt="Logotipo Novogusto" title="Inicio"></a>
            </h1>
            <form action="" method="get">
                <input id="buscar" type="search" name="buscar" required placeholder=" Buscar...">
                <input class="benviar" type="image" src="../img/lupa.png" alt="Enviar">
            </form>
            <div class="ajuste"></div>
        </div>
        <nav>
        <div class="contenedor">
            <ul>
                <li>
                    <a class="burguer" href="#"><img src="../img/menu.svg" alt="Menu"></a>
                    <ul>
                        <li><a href="../index.html">Inicio</a></li>
                        <li><a href="../menu/quienes-somos.html">Quiénes somos</a></li>
                        <!-- <li><a href="../menu/que-ofrecemos.html">Qué ofrecemos</a></li> -->
                        <li><a  href="../menu/tienda-online.php">Tienda online</a></li>
                        <!-- <li><a  href="../menu/blog.html">Blog</a></li> -->
                        <li class="actual"><a href="../menu/escribenos.html">Administrar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <a id="cs" href="../index.html">Cerrar sesion</a>
    </header>

    <main class="adminito">
    <div class="contenedor p-3" id="cuerpo">
        <h2>ADMINISTRAR BASE</h2>
        <table class='table mx-auto' style="width: 80%;">
            <tr>
    <form method="post" action="create.php">
    <td style='text-align:center; vertical-align:middle;'><label for="id">ID:</label><br>
        <input type="text" id="id" name="id"><br></td>
        <td style='text-align:center; vertical-align:middle;'><label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br></td>
        <td style='text-align:center; vertical-align:middle;'><label for="imagen">IMAGEN:</label><br>
        <input type="text" id="imagen" name="imagen"><br></td>
        <td style='text-align:center; vertical-align:middle;'> <label for="descripcion">DESCRIPCION:</label><br>
        <input type="text" id="descripcion" name="descripcion"><br></td>
        <td style='text-align:center; vertical-align:middle;'><label for="precio">PRECIO:</label><br>
        <input type="text" id="precio" name="precio"><br></td>
       
        </tr>
        <tr>
        <td style='text-align:center; vertical-align:middle;'><button class='btn btn-primary' type="submit"value="Enviar">Añadir</button></td>
        </tr>
        
    </form>
    </table>
    
    <br>
    <br>
    <br>

<h2>PEDIDOS</h2>
    <table class='table mx-auto' style="width: 80%;">
    <tr>
    <td style='text-align:center; vertical-align:middle;'>IDS</td>
    <td style='text-align:center; vertical-align:middle;'>Nombres</td>
    <td style='text-align:center; vertical-align:middle;'></td>
    <td style='text-align:center; vertical-align:middle;'>PRECIO TOTAL</td>
    <td style='text-align:center; vertical-align:middle;'>NUMEROPEDIDO</td>
    </tr>
<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "novogusto");
    $sql = "SELECT id, nombre, precio, numpedido FROM pedidos";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='text-align:center; vertical-align:middle;' >".$row["id"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>".$row["nombre"]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;' ></td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["precio"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["numpedido"]."</td>";

            echo "</tr>";
            
        
    }

   

    
    $mysqli->close();
?>
</table>


    <br>
<br>
<h2>PRODUCTOS</h2>
    <table class='table mx-auto' style="width: 80%;">
    <tr>
    <td style='text-align:center; vertical-align:middle;'>ID</td>
    <td style='text-align:center; vertical-align:middle;'>Nombre</td>
    <td style='text-align:center; vertical-align:middle;'>IMAGEN</td>
    <td style='text-align:center; vertical-align:middle;'>DESCRIPCION</td>
    <td style='text-align:center; vertical-align:middle;'>PRECIO</td>
    <td style='text-align:center; vertical-align:middle;'></td>
    </tr>
    <?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "novogusto");
    $sql = "SELECT id, nombre, imagen, descripcion, precio FROM productos";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        if(isset($_REQUEST["id"]) and $_REQUEST["id"] == $row["id"]){
            echo "<tr>";
            echo"<form method='post' action='update.php'>";
            echo "<td><input type='text' id='id' name='id' value='".$row["id"]."'></td>";
            echo "<td><input type='text' id='nombre' name='nombre' value='".$row["nombre"]."'></td>";
            echo "<td><input type='text' id='imagen' name='imagen' value='".$row["imagen"]."'></td>";
            echo "<td><input type='text' id='descripcion' name='descripcion' value='".$row["descripcion"]."'></td>";
            echo "<td><input type='text' id='precio' name='precio' value='".$row["precio"]."'></td>";
            echo"<input type='hidden'name='id'value='".$row["id"]."'>";
            echo"<td><input type='submit'value='Enviar'>Enviar</input></td>";
            echo"</form>";
            echo "<tr>";
            
        } else {
            echo "<tr>";
            echo "<td style='text-align:center; vertical-align:middle;' >".$row["id"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>".$row["nombre"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'><img width='300' src='". $row["imagen"]."'></td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["descripcion"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["precio"]."</td>";
            echo " <td ><a class='btn btn-primary' href='adminindex.php?id=".$row['id']."'>Modificar</a>";
            echo " <a class='btn btn-primary' href='delete.php?id=".$row['id']."'>Borrar</a></td>";
            echo "</tr>";
            
        }
    }

   

    
    $mysqli->close();
?>
</table>

</div>
</main>
<footer>
        <div class="contenedor">
            <div class="columna">
                <h4>Boletín electrónico</h4>
                <form action="" method="post">
                    <input class="email" type="email" name="boletin" required placeholder=" Correo electrónico">
                    <button type="submit">Enviar</button>
                    <div class="checkbox">
                        <input id="footeracepto" type="checkbox" name="condiciones" value="si" required>
                         <label for="footeracepto"> Acepto el <a href="pie/avisolegal.html">aviso legal</a> y la <a href="pie/privacidad.html">política de privacidad</a></label>
                    </div>
                </form>
            </div>
            <div class="columna" id="redes">
                <a target="_blank" href="https://www.facebook.com"><img class="redes" src="../img/facebook.svg" alt="Facebook"></a>
                <a target="_blank" href="https://www.twitter.com"><img class="redes" src="../img/twitter.svg" alt="Twitter"></a>
                <a target="_blank" href="https://www.instagram.com"><img class="redes" src="../img/instagram.svg" alt="Instagram"></a>
                <a target="_blank" href="https://www.youtube.com"><img class="redes" src="../img/youtube.svg" alt="YouTube"></a>
                <a target="_blank" href="https://www.flickr.com"><img class="redes" src="../img/flickr.svg" alt="Flickr"></a>
            </div>
            <div class="columna" id="textopie">
                <h4>Atención al cliente</h4>
                <p class="contacto">Teléfono: <a class="medio" href="tel:876247168">876 247 168</a></p>
                <p class="contacto">WhatsApp: <a class="medio" href="tel:615935715">615 935 715</a></p>
                <p class="contacto">E-mail: <a class="medio" href="mailto:info@novogusto.com">info@novogusto.com</a></p>
            </div>
            <div class="ajuste"></div>
            <p class="linea"></p>
            <p class="pie">2017 &copy; Redcomer Food, Sociedad Limitada · <a href="privacidad.html">Política de privacidad</a> · <a href="avisolegal.html">Aviso legal</a> · <a href="cookies.html">Uso de cookies</a></p>
        </div>
    </footer>
</body>

</html>