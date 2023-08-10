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
                <h4>Ajouter un gerant
                <a href="liste" class="btn btn-danger float-end">Back</a>
                </h4> 
             </div>  
             <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                
                    <div class="form-group mb-3">
                        <label for="">nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                  
                    <div class="form-group mb-3"> 
                        <label for="">prenom</label>
                        <input type="date" name="date de production" class="form-control">
                    </div>
                    <div class="form-group mb-3"> 
                        <label for="">email</label>
                        <input type="date" name="date_de_naissance" class="form-control">
                    </div>
                    <div class="form-group mb-3"> 
                        <label for="">mot de passe</label>
                        <input type="number" name="id_category" class="form-control">
                    </div>
                    <div class="form-group mb-3"> 
                        <label for="">photo</label>
                        <input type="file" name="profile_image" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                    <a href="dashboard" 
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        </a>
                    </div>
                </form>
             </div> 
          </div>   
       </div>   
   </div>   
</div>     
</body>
</html>