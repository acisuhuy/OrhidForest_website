<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css Boostrap -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Css Custom -->
    <link rel="stylesheet" href="{{ URL::asset('css/style-home.css') }}" />
    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <title>Home Page</title>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: aliceblue;">
  <div class="container">
    <a class="navbar-brand" href="/" style="color: aliceblue;">Orchid Forest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: aliceblue;">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/review" style="color: aliceblue;">Reviews</a> 
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: aliceblue;">
                          Welcome back, {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right" style="color: aliceblue;">
                                    </i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login" style="color: aliceblue;"><i class="bi bi-box-arrow-in-left"></i> Login</a> 
                    </li>
                    @endauth
                </ul>
            </div>
    </div>
</nav>



<div>
    @yield('container')
</div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>
               
            </small>
        </div>
    </footer>
        <script>
            ScrollReveal().reveal('.mantap', { delay: 500 });
            
            </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
    
         <script>
            AOS.init();
        </script>
</body>
</html>