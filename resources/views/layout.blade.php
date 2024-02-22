<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link href="/css/app.css" rel="stylesheet">
  <!-- Bootstrap CSS & JS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Bootstrap CSS & JS Online
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      -->
  <script src="/js/bootstrap.bundle.min.js"></script>
  <!-- END Bootstrap -->
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management </title>
</head>

<body class="d-flex flex-column min-vh-100">
  <!--  Header -->
  <div class="container-fluid p-0" id="hdrImg">
    <img src="/img/header.jpg" class="d-block w-100" >
  </div>
  <!-- End Header -->

  <!--  Navbar -->
  <!-- https://getbootstrap.com/docs/5.0/components/navbar/  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Dashbord</a>
          </li>
        <!--
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
        </li>-->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Web Developpement</a></li>
              <li><a class="dropdown-item" href="#">Mobile Developpement</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Desktop Developpement</a></li>
              <li><a class="dropdown-item" href="#">Data Sciences</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Sidenav & Body & Sidbar  -->
  <div class="container" style="margin-top: 20px; margin-left:0px;">
    <div class="row">

      <!-- 4.1)  Sidenav avec 2 colonnes -->
      <div class="col-2 " style="margin: -20px auto 5px -40px; ">
        <!-- Mettez ici le contenu de votre sidenav: des liens, des boutons de commandes...  -->


        <div class="sidebar">
          <header>Main Menu</header>
          <a href="{{ url('/')}}" class="active">
            <i class="fas fa-qrcode"></i>
            <span>Dashbord</span>
          </a>
          <a href="{{ route('directeurs.index') }}">
            <i class="fas fa-link"></i>
            <span>Directeurs</span>
          </a>
          <a href="{{ route('enseignants.index') }}">
            <i class="far fa-question-circle"></i>
            <span>Enseignants</span>
          </a>
          <a href="{{ route('enseignants.index') }}">
            <i class="fas fa-sliders-h"></i>
            <span>Teacher</span>
          </a>
          <a href="{{ route('students.index') }}">
            <i class="far fa-envelope"></i>
            <span>Students</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
          <!--
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Overview</span>
          </a>
          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Events</span>
          </a>-->

        </div>


      </div>
      <!-- End Sidenav-->


      <!-- BODY avec 9 colonnes-->
      <div class="col-lg-8 lg-12" >
        <div class="card " id="tbl-2" >
          <div class="card-header " style="background-color:#213859;color:white; font-size: 18px; font-weight:bold;" >
            School Management !
          </div>
          <div class="card-body">

              @yield('content')

            

          </div>
        </div>
      </div>
      <!-- End Body-->



    </div>
  </div>
  <footer class="bg-dark text-center text-white mt-auto">
    <!-- Grid container -->

    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 ALMAZ:
      <a class="text-white" href="https://ma.linkedin.com/in/zakaria-alma-b34932175">ALMAZakaria.ma</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>