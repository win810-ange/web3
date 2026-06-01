<?php
    include('../basedonne/config.php');
    if (isset($_POST['btnsub'])){
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $telephone = $_POST['numero'];
      $Faculte = $_POST['faculte'];
      $departement = $_POST['departement'];
      $niveau = $_POST['niveau'];
      $stmt = $pdo->prepare("INSERT INTO Etudiant (nom, prenom, email, telephone, Faculte, departement, niveau) VALUES (:nom, :prenom, :email, :telephone, :Faculte, :departement, :niveau)");
      $stmt->execute([
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email, 
        'telephone'=>$telephone, 
        'Faculte'=>$Faculte, 
        'departement'=>$departement, 
        'niveau'=>$niveau
    ]);
      echo '<script>
            alrert("dossier enregistrer avec succés")
      </script>';

    }
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription - Faculté des Lettres et Sciences Humaines</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

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
                        <a href="./connexion.php" class="nav-link">se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a href="./historique.php" class="nav-link">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contacts</a>
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
                        <a href="#" class="nav-link active">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<section class="form-section d-flex align-items-center justify-content-center">
  <div class="glass-card p-5">
    <h2 class="text-center mb-4">Formulaire d'inscription</h2>
    <form action="inscription.php" method="post">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom">
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Votre prénom" name="prenom">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="email@exemple.com" name="email">
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="telephone" placeholder="+243..." name="numero">
      </div>

      <div class="mb-3">
        <label for="faculte" class="form-label">Faculté</label>
        <input type="text" class="form-control" id="faculte" placeholder="Entrez le nom de la faculté voulue" name="faculte">
      </div>

      <div class="mb-3">
        <label for="departement" class="form-label">Département</label>
        <select class="form-select" id="departement" name="departement">
          <option selected>Choisir...</option>
          <option value="Orientation scolaire et professionnelle">Orientation scolaire et professionnelle</option>
          <option value="Gestion et administration des institutions scolaires et de la formation">Gestion et administration des institutions scolaires et de la formation</option>
          <option value="Histoire, sciences sociales et gestion du patrimoine">Histoire, sciences sociales et gestion du patrimoine</option>
          <option value="Français et langues africaines">Français et langues africaines</option>
          <option value="Anglais et cultures africaines">Anglais et cultures africaines</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="niveau" class="form-label">Niveau</label>
        <select class="form-select" id="Niveau" name="niveau">
          <option selected>Choisir...</option>
          <option value="L1">L1</option>
          <option value="L2">L2</option>
          <option value="L3">L3</option>
          <option value="M1">M1</option>
          <option value="M2">M2</option>
        </select>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Soummettre</button>
      </div>
    </form>
  </div>
</section>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>