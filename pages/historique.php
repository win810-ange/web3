<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Historique</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<header class="container my-4">
    <nav class="navbar navbar-expand-sm navbar-dark">
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
                    <a class="nav-link" aria-current="page" href="../index.php">Accueil</a>
                </li>
                <li class="nav-items">
                        <a href="./connexion.php" class="nav-link">se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php#contacts" class="nav-link">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Autorités.php" class="nav-link">Autorités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id = "faculty" role="button" data-bs-toggle="dropdown" aria-haspopup="true">Faculté</a>
                            <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end glass-card" aria-labelledby="faculty">
                                <a href="faculte_lettres_et_sciences_humaines.php" class="dropdown-item">Lettres et sciences humaines</a>
                                <a href="sicences.php" class="dropdown-item">Sciences exactes</a>
                                <a href="#" class="dropdown-item">Informatique et gestion des entreprises</a>
                                <a href="faculte_technique_daccueil.php" class="dropdown-item">Acceuil et tourisme</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a href="inscription.php" class="nav-link">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<header class="py-5 text-center ">
    <div class="container">
        <h1 class="display-5 fw-bold">Historique</h1>
        <p class="lead">
            Bienvenue sur la page historique. Ici, vous pouvez consulter les événements
            passés et les informations archivées.
        </p>
    </div>
</header>

<main class="container my-5">

    <section class="mb-5">
        <div class="glass-card ">
            <h4>Fondation de l’ISP Gombe</h4>
            <p>
                L'Institut Supérieur Pédagogique de Gombe a été fondé en 1971 dans le but
                de former des enseignants qualifiés pour répondre aux besoins éducatifs
                de la région.
            </p>
            <p>
                Dès sa fondation, l’ISP-Gombe s’est donné pour mission de dispenser une
                formation académique de qualité, tout en mettant l’accent sur le
                développement des valeurs intellectuelles, morales et civiques.
            </p>
        </div>
    </section>

    <section class="mb-5">
        <div class="glass-card">
            <h4>Évolution et croissance</h4>
            <p>
                Depuis ses débuts, l'ISP-Gombe a connu une croissance significative,
                avec l'expansion de ses filières et l'amélioration de ses infrastructures.
            </p>
            <p>
                Aujourd’hui, il propose des cursus allant du graduat aux niveaux Licence
                et Doctorat, couvrant des domaines variés tels que les lettres et sciences
                humaines, les sciences exactes, l’informatique, la gestion, l’accueil et
                le tourisme.
            </p>
        </div>
    </section>

    <section>
        <div class="glass-card">
            <h4>Mission</h4>
            <p>
                La mission de l’ISP-Gombe est de former des enseignants et des
                professionnels compétents.
            </p>

            <h4>Impact communautaire</h4>
            <p>
                L'ISP-Gombe a eu un impact significatif sur la communauté locale.
            </p>

            <h4>Engagement envers la qualité</h4>
            <p>
                Reconnu pour son engagement envers la qualité de l’enseignement.
            </p>

            <h4>Héritage et perspectives</h4>
            <p>
                L’ISP-Gombe demeure une référence dans l’enseignement supérieur en RDC.
            </p>
        </div>
    </section>

</main>
<footer class="text-center py-4 ">
    <small>@Groupe 3 — Tous droits réservés</small>
</footer>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
