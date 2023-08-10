<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier un produit
                            <a href="{{route('liste')}}" class="btn btn-warning float-end">retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('validmodif/'.$produit->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">nom</label>
                                <input type="text" name="nom" value="{{$produit->nom}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">prix</label>
                                <input type="integer" name="prix" value="{{$produit->prix}}"  class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">date de production</label>
                                <input type="date" name="date_production"  value="{{$produit->date_production}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">date de peremtion</label>
                                <input type="date" name="date_peremtion"  value="{{$produit->date_peremtion}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label for="">categorie</label>
                                <!-- <label for="">id_category</label>
                                <input type="number" name="id_category" value="{{$produit->id_category}}" class="form-control"> -->
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                   @foreach($categories as $categorie)
                                   <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">photo</label>
                                <input type="file" name="photo" value="{{$produit->photo}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                               <button type="submit" class="btn btn-primary">Modifier</button>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>