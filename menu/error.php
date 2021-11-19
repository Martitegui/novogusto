<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda online de alimentación para profesionales, chefs y particulares">
    <meta name="author" content="Alejandro Martitegui">
    <title>Novogusto :: Contacto</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>
    <script src="../js/jquery.cookiebar.js"></script>
    <script>
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
        
        #ancho {
            width: 94%;
            padding: 0 3% 3% 3%;
            line-height: 2em;
        }
        
        h3 {
            color: #BD3A49;
            padding: 1em 0;
        }
        
        section h3 {
            font-size: 1.4em;
            padding-top: 3%;
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
        
        .campo {
            padding-bottom: 1em;
        }
        
        .label {
            float: left;
            width: 100%;
            padding-bottom: 0.5em;
            font-weight: bold;
        }
        
        .box {
            width: 50%;
            height: 2em;
            font-family: "Raleway", sans-serif;
            background-color: #ffeef2;
            border-radius: 0.4em;
            padding-left: 0.5em;
        }
        
        .boxarea {
            width: 90%;
            height: 2em;
            font-family: "Raleway", sans-serif;
            height: 10em;
            background-color: #ffeef2;
            border-radius: 0.4em;
            padding: 0.5em;
            resize: vertical;
        }
        
        .required {
            font-size: 0.7em;
            vertical-align: super;
            padding-left: 0.3em;
        }
        
        .send {
            padding-top: 1em;
        }
        
        .send button {
            padding: 0.8em 3em;
            font-family: "Raleway", sans-serif;
            background-color: #EA8597;
            border-radius: 0.4em;
        }
        
        .condiciones {
            font-size: 0.8em;
        }
        
        .required {
            color: #BD3A49;
        }
        /* --- Pantallas menores de 950px --- */
        
        @media screen and (max-width: 950px) {
            section h3 {
                padding-top: 5%;
            }
            form {
                padding-bottom: 3%;
            }
            .campo {
                padding-bottom: 1.4em;
            }
            .label {
                float: left;
                width: 100%;
                padding-bottom: 0.5em;
                font-weight: bold;
                font-size: 1.2em;
            }
            .box {
                width: 97%;
                height: 2.5em;
                font-family: "Raleway", sans-serif;
                background-color: #ffeef2;
                border-radius: 0.4em;
                font-size: 1.2em;
            }
            .boxarea {
                width: 93%;
                height: 2em;
                font-family: "Raleway", sans-serif;
                height: 15em;
                background-color: #ffeef2;
                border-radius: 0.4em;
                padding: 0.5em;
                font-size: 1.2em;
            }
            .send {
                padding-top: 1em;
            }
            .send button {
                padding: 0.5em 3em;
                font-family: "Raleway", sans-serif;
                background-color: #EA8597;
                border-radius: 0.4em;
                display: block;
                margin: auto;
                font-size: 1.2em;
            }
            .condiciones {
                font-size: 1em;
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
                <input type="search" name="buscar" required placeholder=" Buscar...">
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
                        <li><a href="quienes-somos.html">Quiénes somos</a></li>
                        <!-- <li><a href="que-ofrecemos.html">Qué ofrecemos</a></li> -->
                        <li><a  href="../menu/tienda-online.php">Tienda online</a></li>
                        <!-- <li><a  href="../menu/blog.html">Blog</a></li> -->
                        <li class="actual"><a href="escribenos.php">Administrar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <a  target="_blank" href="menu/index.php"><img id="carro" src="../img/carrito.svg" alt="Carrito"></a>
    </header>
    <main>
    <div class="contenedor" id="cuerpo">
        <div class="ajuste"></div>
        <section id="ancho">
            <h3>Formulario de inicio de sesión</h3>
            <?php
           
            echo "<p class='textos'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus iste dolorum quam esse quas deserunt error perferendis rem magni ut. Veritatis dignissimos quia doloribus nobis eveniet libero ad omnis unde.</p>";
            echo "<p>EL USUARIO ES 'admin' Y LA CONTRASEÑA 'marti'</p>";
            echo "<div class='formulario'>";

            echo  "<form action='registro.php' method='post' id='contacto'>";

            echo  "<div class='campo'>";
            echo  "<label for='usu' class='label'>Usuario <span class='required'>requerido</span></label>";
            echo  "<input id='usu' type='text' name='usu' class='box' autofocus='autofocus' required>";
            echo  "</div>";

            echo   "<div class='campo'>";
            echo        "<label for='con' class='label'>Contraseña <span class='required'>requerido</span></label>";
            echo        "<input id='con' type='text' name='con' class='box' required>";
            echo    "</div>";
            echo    "<div class='send'>";
            echo        "<button type='submit'><strong>Enviar</strong></button>";
            echo    "</div>";
           
            echo    "</form>";
            echo "<br>";
            echo "<p>ERROR EN EL NOMBRE DE USUARIO O CONTRASEÑA<p>";
            echo "</div>";
          

            ?>
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
