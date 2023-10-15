<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SPARTA</title>
        <meta name="description" content="GRID ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Img/logo.png"/>
        <link rel="stylesheet" href="../Css/mainPage.css">
        <link rel="stylesheet" href="../Css/menu.css">
        <link rel="stylesheet" href="../Css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <header class="header">
            <?php
            include './Menu.html';
            ?>
        </header>
        <div id="mainDiv">
            <div id="pruebaDiv">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <h2>
                            Contáctanos
                        </h2>
                        <p>
                            Somos su mejor opción para cotizar sobre ropa deportiva, déjanos sus datos y un agente te contactará.
                        </p>
                        <div class="row">
                            <div class="col-md-10">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputName">
                                            Nombre:
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputName" required="">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputLastName">
                                            Apellido:
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputLastName" required="">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Correo Eletrónico:
                                        </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="floatingTextarea">Mensaje:</label>
                                        <textarea class="form-control" placeholder="Déjanos saber que te interesa..." id="floatingTextarea"></textarea>

                                    </div>

                                    <button type="submit" class="btn btn-info">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div id="pruebaDiv2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                Más buscados
                            </h2>
                            <p>
                                Aquí puede observar unas fotos de nuestros productos más cotizados.
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="carousel slide" id="carousel-101527">
                                        <ol class="carousel-indicators">
                                            <li data-slide-to="0" data-target="#carousel-101527">
                                            </li>
                                            <li data-slide-to="1" data-target="#carousel-101527" class="active">
                                            </li>
                                            <li data-slide-to="2" data-target="#carousel-101527">
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg">
                                                <div class="carousel-caption">
                                                    <h4>
                                                        First Thumbnail label
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg">
                                                <div class="carousel-caption">
                                                    <h4>
                                                        Second Thumbnail label
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg">
                                                <div class="carousel-caption">
                                                    <h4>
                                                        Third Thumbnail label
                                                    </h4>
                                                </div>
                                            </div>
                                        </div> <a class="carousel-control-prev" href="#carousel-101527" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-101527" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <?php
            include './Footer.html';
            ?>
        </footer>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>

