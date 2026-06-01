<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Faculté des sciences commerciales</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="container my-4">
    <nav class="navbar navbar-expand-sm  navbar-dark">
            <a href="#" class="navbar-brand">
                <img src="../images/logo.png" alt="" class="d-inline-block" width="30px" height="30px">
                    ISP-GOMBE
            </a>
            <button class="navbar-toggler" type ="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php">Accueil</a>
                </li>
                <li class="nav-items">
                        <a href="./connexion.php" class="nav-link">Liste d'Etudiant</a>
                    </li>
                    <li class="nav-item">
                        <a href="./historique.php" class="nav-link">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php#contacts" class="nav-link">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Autorités.php" class="nav-link">Autorités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" id = "faculty" role="button" data-bs-toggle="dropdown" aria-haspopup="true">Faculté</a>
                            <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end glass-card" aria-labelledby="faculty">
                                <a href="./faculte_lettres_et_sciences_humaines.php" class="dropdown-item">Lettres et sciences humaines</a>
                                <a href="./sicences.php" class="dropdown-item">Sciences exactes</a>
                                <a href="#" class="dropdown-item active">Informatique et gestion des entreprises</a>
                                <a href="./faculte_technique_daccueil.php" class="dropdown-item">Acceuil et tourisme</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a href="./inscription.php" class="nav-link">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


<section class="hero text-center text-white">
  <div class="container">
    <h1 style="text-align:center">Faculté des sciences commerciales</h1>
    <p  style="text-align :center" >Gestion • Comptabilité • Marketing • Entreprenariat</p>
  </div>
</section>

<section class="container my-5">
  <h2 class=" text-white mb-5">Départements</h2>
  <div class="row g-4 justify-content-center">

    <div class="col-11 col-md-8 col-lg-6">
      <div class="glass-card p-4 text-center">
        <h5>Comptabilité & Fiscalité</h5>
      </div>
    </div>

    <div class="col-11 col-md-8 col-lg-6">
      <div class="glass-card p-4 text-center">
        <h5>Marketing & Communication</h5>
      </div>
    </div>

    <div class="col-11 col-md-8 col-lg-6">
      <div class="glass-card p-4 text-center">
        <h5>Gestion des entreprises</h5>
      </div>
    </div>

    <div class="col-11 col-md-8 col-lg-6">
      <div class="glass-card p-4 text-center">
        <h5>Banque & Finance</h5>
      </div>
    </div>

  </div>

</section>

<footer class="text-center text-white py-4 glass-footer">
  
  <p  style="text-align:center" class="text-center mb-0">© 2026 ISP – Institut Superieur Pédagogique. Tout droits réservés 
  </p>
    
  </div>
</footer>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>