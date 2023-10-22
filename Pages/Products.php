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
        <!--
        
            <header class="header">
                <!--
                <?php
                include './Menu.html';
                ?>
                
            </header>
            -->
    </header>
    <h1>Productos Más Vendidos</h1>

    <section class="product-grid">
        <div class="product" class="animated">
            <img src="/Img/productos/producto1.jpeg" alt="Producto 1" class="animated">
            <h3 class="animated">Camiseta Deportiva</h3>
            <p>Descripción del producto 1.</p>
            <p class="price">$29.99</p>
        </div>
        <div class="product" class="animated">
            <img src="/Img/productos/producto2.jpeg" alt="Producto 2" class="animated">
            <h3 class="animated">Pantalones Deportivos</h3>
            <p>Short liviano de 3" de largo con ruedo curvo y cordón de ajuste en la cintura. Logo en transfer.
            </p>
            <p class="price">$39.99</p>
        </div>
        <div class="product">
            <img src="/Img/productos/producto3.jpeg" alt="Producto 3" class="animated">
            <h3 class="animated">Medias Deportivas</h3>
            <p>Descripción del producto 2.</p>
            <p class="price">$39.99</p>
        </div>
        <div class="product" class="animated">
            <img src="/Img/productos/producto4.jpeg" alt="Producto 4" class="animated">
            <h3 class="animated">Camiseta Selección Argentina</h3>
            <p>Camiseta utilizada en el mundial de Qatar 2022</p>
            <p class="price">$39.99</p>
        </div>
        <div class="product" class="animated">
            <img src="/Img/productos/producto5.jpeg" alt="Producto 5" class="animated">
            <h3 class="animated">Calzas Deportivas</h3>
            <p>Calzas color negro, multifunción</p>
            <p class="price">$39.99</p>
        </div>
        <!-- Agrega más productos aquí -->
    </section>   
    
    <footer class="footerProducts">       
        <?php
        include './FooterProducts.html';
        ?>
    </footer>

</body>
</html>