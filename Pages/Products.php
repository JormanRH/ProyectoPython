<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SPARTA</title>
        <meta name="description" content="GRID ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Img/logo.png"/>
        <link rel="stylesheet" href="../Css/menu.css">
        <link rel="stylesheet" href="../Css/products.css">
    </head>
    <body>
        <header class="header">
            <?php
            include './Menu.html';
            ?>
        </header>
        <h1>Productos Más Vendidos</h1>
        <p id="pCambio">Tipo Cambio $ CR - Compra: <?php
            echo obtenerPorGet(317);
            ?> Venta:  <?php
            echo obtenerPorGet(318);
            ?> </p>

        <section class="product-grid">
            <div class="product" class="animated">
                <img src="../Img/productos/producto1.jpeg" alt="Producto 1" class="animated">
                <h3 class="animated">Camiseta Deportiva</h3>
                <p>Idel para esos días de ejercicio.</p>
                <p class="price">$19.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto2.jpeg" alt="Producto 2" class="animated">
                <h3 class="animated">Pantalones Deportivos</h3>
                <p>Short liviano de 3" de largo con ruedo curvo y cordón de ajuste en la cintura.
                </p>
                <p class="price">$19.99</p>
            </div>
            <div class="product">
                <img src="../Img/productos/producto3.png" alt="Producto 3" class="animated">
                <h3 class="animated">Medias Deportivas</h3>
                <p>Ajuste perfecto, lo que andas buscando para rendir mejor.</p>
                <p class="price">$9.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto4.png" alt="Producto 4" class="animated">
                <h3 class="animated">Camiseta Selección Argentina.</h3>
                <p>Camiseta utilizada en el mundial de Qatar 2022</p>
                <p class="price">$79.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto5.avif" alt="Producto 5" class="animated">
                <h3 class="animated">Guantes Puma</h3>
                <p>Perfectos para la práctica del fútbol, excelente agarre.</p>
                <p class="price">$39.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto6.png" alt="Producto 5" class="animated">
                <h3 class="animated">Tacos Adidas</h3>
                <p>Si querés lucir genial, estos tacos son ideales.</p>
                <p class="price">$59.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto7.jpg" alt="Producto 5" class="animated">
                <h3 class="animated">Camiseta Costa Rica</h3>
                <p>Camiseta del país más feliz del mundo.</p>
                <p class="price">$89.99</p>
            </div>
            <div class="product" class="animated">
                <img src="../Img/productos/producto8.webp" alt="Producto 5" class="animated">
                <h3 class="animated">Balón Qatar 2022</h3>
                <p>Ya sea para usarlo o para colección, este balón es perfecto.</p>
                <p class="price">$49.99</p>
            </div>
            <!-- Agrega más productos aquí -->
        </section>   

        <footer class="footerProducts">       
            <?php
            include './FooterProducts.html';
            ?>
        </footer>
        <?php
        function obtenerPorGet($tipo) {
            $CorreoElectronico = 'jormanrh1993@gmail.com';
            $Token = '8M0O238P33';
            $ind_econom_ws = "https://gee.bccr.fi.cr/Indicadores/Suscripciones/WS/wsindicadoreseconomicos.asmx/"; // URL del WebService
            $ind_econom_func = "ObtenerIndicadoresEconomicosXML?"; // Funcion que se va a utilizar del WebService

            date_default_timezone_set('America/Costa_Rica');
            $hoy = date("d/m/Y");
            $arrContextOptions = array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
            );
            $urlWS = $ind_econom_ws . $ind_econom_func . "Indicador=" . $tipo . "&FechaInicio=" . $hoy . "&FechaFinal=" . $hoy . "&Nombre=tq&SubNiveles=N&CorreoElectronico=" . $CorreoElectronico . "&Token=" . $Token;
            $indWS = file_get_contents($urlWS, false, stream_context_create($arrContextOptions));
            $xml = simplexml_load_string($indWS);
            $tipo_cambio = trim(strip_tags(substr($xml, strpos($xml, "<NUM_VALOR>"), strripos($xml, "</NUM_VALOR>"))));
            $tipoCambio = number_format($tipo_cambio, 2);
            return $tipoCambio;
        }//end method
        ?>

    </body>
</html>
