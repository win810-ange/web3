<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header('location:connexion.php');
    }
    include('../basedonne/config.php');

    $stmt = $pdo->prepare("SELECT * FROM Etudiant");
    $stmt->execute();
    $resultats = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>listeEtudiant</title>
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
                        <a href="pages/Etudians.php" class="nav-link">Liste d'Etudiant</a>
                    </li>
                    <li class="nav-item">
                        <a href="./historique.php" class="nav-link">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a href="../index.php#contacts" class="nav-link">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Autorités.php" class="nav-link active">Autorités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id = "faculty" role="button" data-bs-toggle="dropdown" aria-haspopup="true">Faculté</a>
                            <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end glass-card" aria-labelledby="faculty">
                                <a href="./faculte_lettres_et_sciences_humaines.php" class="dropdown-item">Lettres et sciences humaines</a>
                                <a href="sicences.php" class="dropdown-item">Sciences exactes</a>
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
    <table class="table">
        <tr>
            <th scope="col">
                nom
            </th>
            <th scope="col">
                prenom
            </th>
            <th scope="col">
                gmail
            </th>
            <th scope="col">
                numero
            </th>
            <th scope="col">
                faculte
            </th>
            <th scope="col">
                departement
            </th>
            <th scope="col">
                promotion
            </th>

        </tr>
        <?php foreach($resultats as $resultat): ?>
            <tr>
                <td><?= $resultat['nom']; ?> </td>
                <td><?= $resultat['prenom']; ?></td>
                <td><?= $resultat['email']; ?></td>
                <td><?= $resultat['telephone'] ?></td>
                <td><?= $resultat['telephone'] ?></td>
                <td><?= $resultat['Faculte'] ?></td>
                <td><?= $resultat['departement'] ?></td>
                <td>
                    <a class="btn btn-primary btn-lg" href="edit.php?id=<?=$resultat['id']?>">Modifier</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-lg" href="delete.php?id=<?= $resultat['id']?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>