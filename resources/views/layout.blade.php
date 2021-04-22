
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEROES VOLUNTARIOS</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HEROES VOLUNTARIOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                                <a class="nav-link"  href="/">HOME</a>
                        </li>
                            
                        <li class="nav-item">
                            <a class="nav-link"  href="/quienesSomos">QUIENES SOMOS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/informate">INFORMATE</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

        @yield('contenidos')
</body>
</html>