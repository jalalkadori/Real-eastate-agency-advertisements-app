<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMMO HORIZON</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <body>

        <header class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark py-2">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="./logo/black.png" alt="logo" width="120">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <main class="container-fluid">
            <section class="container mt-5">
                <h2>Filtrer la liste des annonces !</h2>
                <div class="row row-cols-lg-3">
                    <div class="col">
                        <h5 for="type">Categorie</h5>
                        <select class="form-select" aria-label="type">
                            <option selected>Open this select menu</option>
                            <option value="Location">Location</option>
                            <option value="Vente">Vente</option>
                        </select>
                    </div>

                    <div class="col">
                        <h5>Prix : </h5>
                        <div class="d-flex gap-5 w-50">
                            <input type="number" class="form-control w-75" placeholder="Min" aria-label="Min" min="0">
                            <input type="number" class="form-control w-75" placeholder="Max" aria-label="Max" min="0">
                        </div>
                    </div>
                    
                    <div class="col d-flex align-items-end">
                        <button class="btn btn-dark">Chercher</button>
                    </div>
                </div>
            </section>

            <section class="container mt-5">
                <h2>Liste des Annonces disponible : </h2>
                <div class="row row-cols-lg-4 mt-5">
                    <div class="col">
                        <div class="card">
                            <img src="./images/Tanger.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Jolie Appartement à Louer de 87 m²</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="text-danger fs-3">2900 DH</h5>
                                </div>
                                <p class="card-text fs-5">Rte Rabat, Tanger.</p>
                                <p class="card-text">Publié le 01/02/2023.</p>
                                <a href="#" class="btn btn-success">Modifier</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>   

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </main>













        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>