<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Voting System</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="css/main.css">

    </head>
    <body id="home">
    <nav class="navbar navbar-expand-lg bg-info ps-5 pe-5">
        <div class="container-fluid">
            <a class="navbar-brand text-dark">Philippine Elections</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-dark me-2" aria-current="page" href="profile" role="button" id="hovers">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  text-light btn btn-outline-dark me-2" href="voting" role="button">Vote</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  text-light btn btn-outline-dark me-2" href="stat" role="button">Election Statistics</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  text-light btn btn-outline-dark me-2" href="voterstat" role="button">Voter Statistics</a>
                </li>
            </ul>
            <a class="btn btn-outline-dark" href="/login" role="button">Log Out</a>
            </div>
        </div>
        </nav>

        @yield('content')

        <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-light">2022 Philippine National Election</span>
            </div>
            <div class="dropup-center dropup">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropupCenterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                more
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropupCenterBtn">
                <li><a class="dropdown-item" href="profile">Profile</a></li>
                <li><a class="dropdown-item" href="voting">Vote</a></li>
                <li><a class="dropdown-item" href="stat">Election Statistics</a></li>
                <li><a class="dropdown-item" href="voterstat">Voter Statistics</a></li>
                <li><a class="dropdown-item" href="login">Log Out</a></li>
            </ul>
            </div> 
        </footer>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
