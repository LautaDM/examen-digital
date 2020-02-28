<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Nombre generico</title>
</head>
<body>
    <main class="container">
    <header>
        <nav>
            <ul>
                <li><a href="/actores">Actores</a></li>
                <li><a href="/agregaractor">Agregar</a></li>
                <li><a href="/peliculas">Peliculas</a></li>
                <li>Item1</li>
                <li>Item1</li>
                <li>Item1</li>
            </ul>
        </nav>

    </header>

    @yield('contenido')

    <footer>  Soy un super footer   </footer>

    </main>
    <!-- Scrips de bootstrap !-->

    <script src="js/jquery.js"  crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>