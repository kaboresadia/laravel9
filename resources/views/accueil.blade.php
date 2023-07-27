
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Formulaire</title>
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

<div class="container mt-3 ">
    <div class="row"> 
        <div class="col-md-6  text-white rounded">
           <form action='/register/traitement' method="POST">
            <h2 class="inscrit text-white">Veuillez inscrire un étudiant</h2><hr>
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">Email</label>
                     <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
                </div>

               <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                   <input type="mot_pass" name="mot_pass" class="form-control" id="exampleInputPassword1"  required>
               </div>
            @error('email')
            <p class="text-danger">Cet email existe déja </p>
            @enderror('email')
               <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Numéro de téléphone</label>
                   <input type="int" name="numero" class="form-control" id="exampleInputPassword1"  required>
              </div>
            @error('numero')
            <p class="text-danger">Veillez saisir obligatoirement 8 chiffres </p>
            @enderror('numero')
                <div class="col-md-12 text-center">
                    <button class="button" type="submit" name="submit" class="btn-primary">Enregistrer</button>
                </div>
             </form>
     </div>
           <div class="col-md-6">
               <img class="ima"src="{{ asset('../image/image2.jpg') }}" alt="" heigth="200" width="600">
          </div>
    </div>
</div>
    <div class="container-fluid footer  mt-3">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <p class="text-white">&copy;Copyright 2023.Tous droit Réservées</p>
      </div>
    </div>
  </div>

  <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/script.js') }}"></script>
</body>
</html>