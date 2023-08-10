<div class="row row-cols-3 row-cols-md-4 g-4">
        @foreach( $produits as $produit)
        <div class="col">
            <div class="card">

                <img src="{{asset('photo/'.$produit->photo)}}" class="tailleimageproduit" alt="...">
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
        </div>
        <a href="accueil" class="btn btn-warning">retour
                    
        @endforeach