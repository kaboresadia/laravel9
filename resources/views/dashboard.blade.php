
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
    .sidebar {
      height: 100vh;
    }

    .chat-container {
      height: 100vh;
      overflow-y: scroll;
    }
  </style>

</head>
<body>
<div class="container-fluid s0 text-white">
    <div class="row ">
      <div class="col-md-4 col-sm-4 s2">
        <h2 class="a1 text-white">Université-NAZI-BONI</h2>
        <h6 class="a2">ECOLE SUPERIEUR D'INFORMATIQUE</h6>
    </div>
         <div class="col-md-4 col-sm-4 s3">
             <img src="{{ asset('image/image1.jpg') }}" alt="logo" white="100px" height="100px">
        </div>
             <div class="col-md-4 col-sm-4 s4">
             <h2 class="b1 text-white">Burkina-Faso</h2>
             <h6 class="b2">Unité-Progrès-justice</h6>
      </div>
    </div>
</div> 
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-lg-2 bg-dark sidebar">
      <!-- Barre latérale -->
      <h2 class="text-light">Dashboard</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/acceuil">Inscrire un etudiant </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/liste">liste des etudiant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/liste">Generer la carte</a>
        </li>
    </div>
    <link rel="stylesheet" href="{{asset ('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}">
@yield('page-content')
</body>
</html>

<style>
  .nav-link:hover{
    cursor: pointer;
    background: linear-gradient(180deg, rgba(174, 0, 1, 1), rgba(174, 0, 1, 1));
  }
  
</style>

<div class="container-fluid footer text-center mt-3">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="text-white">&copy;Copyright 2023.Tous droit Réservées</p>
      </div>
    </div>
  </div>
</body>
</html>
     

    

