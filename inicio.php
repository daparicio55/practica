<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En Linea | Inicio</title>
    <!-- css de la pagina -->
    <?php include 'partes/css.php'; ?>
</head>

<body class="px_3">
    <!-- header de la pagina -->
    <?php include 'partes/header.php'; ?>
    <div class="container mt-4">
        <h1 class="h1">SOLUCIONES CREATIVAS</h1>
        <P> sin importar cual sea tu negocio,nuestro equipo puede hacerlo desde cero.
        </P>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="w-100" src="./resources/img/idea_01.PNG" alt="">
                        <h5 class="h5 mt-2">
                            <i class="bi bi-pencil-fill"></i> 
                            <a class="link-card" href="./disenio.php">
                                DISEÑO
                            </a>
                        </h5>
                        <P class="pt-0">Creamos diseños segun tus necesidades.</P>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="w-100" src="./resources/img/idea_02.PNG" alt="">
                        <h5 class="h5 mt-2">
                            <i class="bi bi-flower1"></i> 
                            <a class="link-card" href="./desarrollo.php">
                                DESARROLLO
                            </a>
                        </h5>
                        <P class="pt-0">Nuestros programadores te garantizan la perfección.</P>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="w-100" src="./resources/img/idea_03.PNG" alt="">
                        <h5 class="h5 mt-2">
                            <i class="bi bi-airplane"></i>
                            <a class="link-card" href="./edicion.php">
                                EDICIÓN DE LIBROS
                            </a>
                        </h5>
                        <P class="pt-0">Que el producto final llegue a tus clientes.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer de la pagina -->
    <?php include 'partes/footer.php'; ?>
</body>

</html>