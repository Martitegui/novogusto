<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda online de alimentación para profesionales, chefs y particulares">
    <meta name="author" content="Orlando Suárez">
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
    #cuerpo {
     background-color: white;
     background-image: none;
   }
    .carritowo a{
    background-color: #EA8597;
    border-color: black;
    color: black;
    }
    .carritowo a:hover{
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
                        <li><a href="../menu/escribenos.html">Contacto</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
   
    </header>

    <main class="carritowo">
    <div class="contenedor p-3" id="cuerpo">

    
   
    <?php
        session_start();
        $IDTOT="";
        $NOMTOT="";
        $PRECTOT=0;
        echo "<h2>Mi carrito</h2>";
        echo "<br>";
        
        echo "<br>";
        echo "<br>";
       
        echo "<table class='table mx-auto' style='width: 80%;''>";
        echo "<tr>";
            echo "<th style='text-align:center; vertical-align:middle;'>ID</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Nombre</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Imagen</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Descripcion</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Precio</th>";
        echo "</tr>";
        foreach ($_SESSION as $result){
            echo "<tr>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[0]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[1]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'><img width='300' src='". $result[2]."'></td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[3]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[4]."</td>";
            echo "</tr>";           
            $IDTOT=$result[0].",".$IDTOT;
            $NOMTOT=$result[1].",".$NOMTOT;
            $PRECTOT=$result[4]+$PRECTOT;
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<table class='table mx-auto' style='width: 90%;''>";
        echo "<tr>";
        echo "<th style='text-align:center; vertical-align:middle;'>IDS pedido</th>";
        echo "<th style='text-align:center; vertical-align:middle;'>Nombres Pedido</th>";
        echo "<th style='text-align:center; vertical-align:middle;'></th>";
        echo "<th style='text-align:center; vertical-align:middle;'></th>";
        echo "<th style='text-align:center; vertical-align:middle;'>Precio TOTAL</th>";
        echo "</tr>"; 
        
        echo "<tr>";
        // echo "<td style='text-align:center; vertical-align:middle;'>".$IDTOT."</td>";
        // echo "<td style='text-align:center; vertical-align:middle;'>".$NOMTOT."</td>";

        // echo "<td style='text-align:center; vertical-align:middle;'>".$PRECTOT."</td>";
        echo"<form method='post' action='pedidos.php'>";
        echo "<td style='text-align:center; vertical-align:middle;'><input style='width: 40%;  type='text' id='id' name='id' value='".$IDTOT."' readonly></td>";
        echo "<td style='text-align:center; vertical-align:middle;' colspan='2'><input style='width: 130%;' type='textarea' id='nombre' name='nombre' value='".$NOMTOT."' readonly></td>";
        echo "<td style='text-align:center; vertical-align:middle;'></td>";
        echo "<td style='text-align:center; vertical-align:middle;'><input style='width: 15%; type='text' id='precio' name='precio' value='".$PRECTOT."' readonly></td>";
        echo "</tr>";  
        echo "<tr>";
        echo"<td style='text-align:center; vertical-align: middle;'><input style='padding:10px;' type='submit'value='Realizar pedidos'></input></td>";
        echo "<td><a class='btn btn-primary' href='vaciarcarrito.php'>Cancelar pedido</a></td>";
        echo"</form>";
        echo "</tr>";  
        

        //if($_SESSION.size)
        // echo "<tr>";
        // echo "<td style='text-align:center; vertical-align: middle;'><a href='pedidos.php'></td>";
        // echo "<td></td>";
        // echo "<td></td>";
        // echo "<td></td>";
        
        // echo "</tr>";
        echo "</table>";
    ?>
   
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