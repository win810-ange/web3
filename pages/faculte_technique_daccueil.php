<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faculté technique de ISP-GOMBE</title>
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
                                <a href="./pagecom.php" class="dropdown-item">Informatique et gestion des entreprises</a>
                                <a href="#" class="dropdown-item active">Acceuil et tourisme</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a href="./inscription.php" class="nav-link">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <header class="py-5 text-center ">
    <div class="container">
        <h1 class="display-5 fw-bold">Facultés de Sciences et Techniques d'Accueil</h1>
        <p class="lead">
            Nous offrons des connaissances fondamentales sur les sciences de gestions, du management hôtelier aux étudiants.
        </p>
    </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center text-white mb-4">Départements</h2>
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4">
                    <h5>Accueil et Tourisme</h5>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4">
                    <h5>Hôtellerie et Restauration</h5>
                </div>
            </div>

        </div>
        <div class="text-center mt-4">
            <a href="./inscription.php" class= "btn btn-primary">S'inscire</a>
        </div>
    </section>
</header>
<footer class="text-center text-white py-4 glass-footer">
  © 2026 ISP – Faculté de Sciences et Techniques d'Accueil
</footer>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>