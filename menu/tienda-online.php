<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda online de alimentación para profesionales, chefs y particulares">
    <meta name="author" content="Alejandro Martitegui">
    <title>Novogusto :: Tiendaonline</title>
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

        $(document).ready(function() {
            $('.bxslider').bxSlider({
                auto: true,
                pager: false,
                mode: 'fade',
                captions: true
            });
        });

        /* -- Política de Cookies -- */

        $(document).ready(function() {
            $.cookieBar();
        });

    </script>
    <style>
     table {
    align-items: center;
  }


@media screen and (min-width: 1150px) {
        #buscar{
            /*outline-offset: 0!important;
            font-size: 0.84em!important;*/
            line-height: 0!important;
            font-size: 13.3333px!important;
        }

       h1{
        line-height: 1.23em!important;
        font-size: 2.2rem!important;
        
        margin-bottom: 3.6%!important;
        margin-left: 3%!important;
        margin-right: 2%!important;
        margin-top: 2.4%!important;

        }

        /*header form{
        margin-top: 1.9%!important ;
        margin-bottom: 4.1%!important;

        
        }*/

        /*header form{
            padding-bottom: 1em!important;
        }*/
}
  #buscar{
            outline-offset: 0!important;
            
            /*margin-top: 0.9em;*/
            
        }
        #slider{
          padding-top: 0!important;
        }

       

        #cuerpo {
            background-color: white;
            background-image: none;
        }
        
        #ancho {
            width: 94%;
            padding: 0 3% 3% 3%;
            line-height: 2em;
        }
        
        .list-group a{

          background-color: #ffd6de!important;
          padding-top: 70px; 
          padding-bottom: 70px; 

        }

         .list-group a:hover{
          color: black;
          background-color: white!important;
          
        }

        .productostienda a:hover{
           background-color:  #ffd6de;
           border-color: black;
          color:black;
          font-weight:5em;
        }

        .benviar{
              padding: 0 0 0 0.35em!important;
        }

        h3 {
            color: #BD3A49;
            padding: 1em 0;
        }
        
        section h3 {
            font-size: 1.4em;
            padding-top: 0;
        }
        

        
    

        section p {
            padding-bottom: 1em;
        }
        
        .color {
            color: #BD3A49;
        }
        
        .color a {
            color: #BD3A49;
        }
        
        #imagencab {
            padding-bottom: 2em;
        }
        nav{
          line-height: 1.2!important;
        }
         @media screen and (max-width: 950px) {
           
          h1 img{
                vertical-align: 0px;
          }

            .col-md-7 img {
                display: none;
            }

          
          }
          
    </style>
    </head>

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
                        <li class="actual"><a  href="../menu/tienda-online.php">Tienda online</a></li>
                        <!-- <li><a  href="../menu/blog.html">Blog</a></li> -->
                        <li><a href="../menu/escribenos.php">Administrar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <a href="carritoindex.php"><img id="carro" src="../img/carrito.svg" alt="Carrito"></a>
    </header>

    <main class="tiendaonline">
    <div class="contenedor p-3" id="cuerpo">
      <section>
        
      
    <div class="row pt-3">

      <div class="col-lg-3">

        
        <div class="list-group text-center">
          <a href="#1" class="list-group-item">Carnes</a>
          <a href="#5" class="list-group-item">Pescados</a>
          <a href="#9" class="list-group-item">Mariscos</a>
         
        </div>

      </div>
      <div class="col-lg-9">
        <div class="row">
 <div id="slider">
            <ul class="bxslider">
              <li><img src="../img/variedadtienda.jpg" alt=""></li>
                <li><img src="../img/carnestienda.jpg" alt=""></li>
                <li><img src="../img/pescadostienda.jpg" alt=""></li>
                
            </ul>
        </div>               
        </div>
      </div>     
    </div>
    <br>
  </section>



        <h2 class="black p-2">Tienda Online</h2>
        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in..............</p>
        <br>
    <section class="productostienda" >
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
        $mysqli = new mysqli("localhost", "root", "", "novogusto");
        $sql = "SELECT * FROM productos";
        $result = $mysqli->query($sql);

        while($row = $result->fetch_assoc()) {
           
            echo "<tr>";
            echo "<td style='text-align:center; vertical-align:middle;' >".$row["id"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>".$row["nombre"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'><img width='300' src='". $row["imagen"]."'></td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["descripcion"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'>". $row["precio"]."</td>";
            echo "<td style='text-align:center; vertical-align: middle;'><a href='carrito.php?id=".$row["id"]."&nombre=".$row["nombre"]."&imagen=".$row["imagen"]."&descripcion=".$row["descripcion"]."&precio=".$row["precio"]."' class='btn btn-primary'>Comprar</a></td>";
            echo "</tr>";
            
        }
        $mysqli->close();
    ?>
    </table>


    </section>
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