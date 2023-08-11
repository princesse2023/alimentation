<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{('css/offcanvas.css')}}">
    <title>Document</title>
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
                    <li class="nav-item accueil2">
                        <a class="nav-link active" aria-current="page" href="#">Accueill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accueil" href="connect">se deconnecter</a>
                    </li>
                    <!-- </li>
                    <li class="nav-item">
                        <a class="nav-link accueil" href="#">se deconnecter</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
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
    <div class="row row-cols-3 row-cols-md-4 g-4">
        @foreach($produits as $produit)
        <div class="col">
            <div class="card">

                <img src="{{asset('photo/'.$produit->photo)}}" class="tailleimageproduit" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nom: {{$produit->nom}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prix: {{$produit->prix}}</li>
                        <li class="list-group-item">Category: {{$produit->category->nom}}</li>
                    </ul>
                    <a href="{{url('details/'.$produit->id)}}" class="btn btn-warning">Details</a>

                </div>
            </div>
        </div>
        @endforeach

</body>

</html>