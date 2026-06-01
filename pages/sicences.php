php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
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
                        <a href="./connexion.php" class="nav-link">Se connecter</a>
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
                                <a href="#" class="dropdown-item active">Sciences exactes</a>
                                <a href="pagecom.php" class="dropdown-item">Informatique et gestion des entreprises</a>
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
    <div class="row" style="padding: 50px;"></div>
            <div class="row text-center container"><!--mak1-->
                <!--l'entete -->
                <h1 class="marq">Faculté des Sciences Exactes</h1>
                <p class="marq">bienvenue à la Faculté des science exactes de l'isp</p>

            </div>
            <div class="row d-flex glace"><!--mak2-->
                <!--div class="row container border d-flex"-->
                    <div class="container col-6 "><!--mak2/boite1-->
                        <h3>Présentation e la Faculté</h3>
                        <div class="underlign"></div>
                        <p>
                            notre faculté forme des scientifiques compétents 
                            dans les domaines des mathématique,   de la physique de l'informatique 
                            et de la chimie, en offrant un enseignemet de qualité 
                            et des installations moderne
                        </p>
                    </div>
                    <div class="container col-6 col-ms-auto"><!--mak2/boite2-->
                        <img src="../images/microscope.avif" alt="telescope livre"  width="100%" height="100%">
                    </div>
            </div>
        <div class="row">
                <!--le div des departements-->
                <!--ici on a le departement des mathématique-->
                <div class="col col-3-lg row-col-6-md border d-flex glace"><!--A-->
                    <div class="container"><!--A1-->
                        <h4>Mathématiques</h4>
                        <div class="underlign"></div>
                        <p>
                            Le département de Mathématiques développe la pensée logique des structures et des modèles. 
                            Il forme des spécialistes capables de résoudre des problèmes 
                            complexes dans la science, l’ingénierie et l’informatique
                        </p>
                    </div>
                    <div class="container"><!--A2-->
                        <img src="../images/math4.avif" height="300" width="300" alt="">
                    </div>
                </div>
                <!--ici on a le departement de physique-->
                <div class="col row-col-3-lg row-col-6-md border d-flex glace"><!--C-->
                     <div class="container">
                        <h4>Physique</h4>
                        <div class="underlign"></div>
                        Le département de Physique explore les lois fondamental
                        es qui régissent l’univers. 
                        Il prépare les étudiants à la recherche scientifique et
                         aux applications technologiques avancées.
                    </div>
                    <div class="container">
                        <img src="../images/phys.avif" height="300" width="300" alt="">
                    </div>

                </div>
                <!--ici on a le departement d'informatique-->
                <div class="col row-col-3-lg row-col-6-md border d-flex glace"><!--B-->
                    
                    <div class="container">
                    <h4>informatique</h4>
                    <div class="underlign"></div>
                    <p>
                        Le département d’Informatique forme des spécialistes en programmation et 
                        algorithmique. Il prépare les étudiants à relever les défis de l’ère digitale et de l’innovation technologique
                    </p>
                    </div>
                    <div class="conatiner">
                    <img src="../images/info1.avif" height="300" width="300" alt="">
                    </div>

                </div>
                <!--ici on a le departement de chimie-->
                <div class="col row-col-3-lg row-col-6-md border d-flex glace"><!--D-->
                    <div class="container">
                    <h4>Chimie</h4>
                    <div class="underlign"></div>
                    <p>
                        Le département de Chimie étudie 
                        les propriétés, la structure et les 
                        transformations de la matière. Il forme des 
                        scientifiques capables d’innover dans la recherche, 
                        l’industrie et l’environnement.
                    </p>
                    </div>
                    <div class="conatiner">
                    <img src="../images/chimie.jpeg" height="300" width="300" alt="">
                    </div>

                </div>
        </div>
    <footer class="row glass-footer" style="margin-left: 0%; width: 100%;">
        <div class="row text-center">
                <!--le div des debouchées-->
            <p>
                Decouvrez les nombreux oppotunité profssionnelles offertes à son diplomé :
            </p>
            <div>
                <ul class="d-flex list-unstyled gap-4" style="padding-left: 30%; padding-right: 30%;">
                    <li><a href="#" class="nav-link text-white">Enseignement</a></li>
                    <li><a href="#" class="nav-link text-white">Recherche</a></li>
                    <li><a href="#" class="nav-link text-white">Industrie</a></li>
                    <li><a href="#" class="nav-link text-white">informatique</a></li>
                </ul>
            </div>
                <!--ajouter des images de fin-->
        </div>
    </footer>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>