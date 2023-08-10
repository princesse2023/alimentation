<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{('css/offcanvas.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="frontend/images/Capturesamaritain.PNG" alt="..." width="150px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item accueil">
            <a class="nav-link active" aria-current="page" href="accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link accueil" href="#"></a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link accueil" href="#">se deconnecter</a>
          </li>
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            se deconnecter
          </a> -->
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <div><strong>
      <h3 class="bord">Bienvenue sur votre t@bleau de bord Mr Karim</h3>
    </strong></div>
  <div>
    <x-slot name="header">
    </x-slot>
    <!-- Bienvenue vous êtes connecté(e)s! -->
  </div>
  <div class="dg">
    <div class="cadretableau bg-body rounded shadow-sm ">
      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"></strong>
      <div>
        <a href="index">
          <h4 class="btn btn-secondary">Ajouter un gerant</h4>
        </a>
      </div>
      <a href="cat">
        <h4 class="btn btn-info"> Créer une catégorie</h4>
      </a>
      <a href=" ajp">
        <h4 class="btn btn-success">Ajouter un produit</h4>
      </a>
      <h5 class="border-bottom pb-2 mb-4">Listes des produits</h5>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">prix</th>
            <th scope="col">date de production</th>
            <th scope="col">date de peremtion </th>
            <th scope="col">categorie </th>
            <th scope="col">Photo</th>

            <th scope="col">
              <div class="act">
                Action
              </div>
            </th>
          </tr>
        </thead>

        <tbody>@foreach($produits as $produit)
          <tr>
            <td>{{$produit->id}}</td>
            <td>{{$produit->nom}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->date_production}}</td>
            <td>{{$produit->date_peremtion}}</td>
            <td>{{$produit->category->nom}}</td>
            <td><img src="{{asset('photo/'.$produit->photo)}}" width="70px" height="70px" alt=""></td>

            <td>
              <div class="positionaction">
                <a class="btn btn-success" href="{{url('modif/'.$produit->id)}}">Modifier</a>

                <a href="{{url('delete/'.$produit->id)}}" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer cet produit?')){document.getElementById('form-{{$produit->id}}').submit()}">retirer</a>
              </div>
            </td>
          </tr> @endforeach
        </tbody>

      </table>
    </div>
    </p>
  </div>


  <script src="{{asset('bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('offcanvas.js')}}"></script>
</body>

</html>