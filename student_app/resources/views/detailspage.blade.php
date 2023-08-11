<div class="row row-cols-3 row-cols-md-4 g-4">
      
        <div class="col">
            <div class="card">

                <img src="{{asset('photo/'.$produit->photo)}}" class="tailleimageproduit" alt="..." width="200px" height="150px">
                <div class="card-body">
                    <h5 class="card-title">Nom: {{$produit->nom}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prix: {{$produit->prix}}</li>
                        <li class="list-group-item">Category: {{$produit->category->nom}}</li>
                        <li class="list-group-item">date_production: {{$produit->date_production}}</li>
                        <li class="list-group-item">date_peremtion: {{$produit->date_peremtion}}</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <a href="{{route('accueil')}}" class="btn btn-warning">retour</a>
            </div>
        </div>
        <!-- <a href="accueil" class="btn btn-warning">retour -->
        
    
     