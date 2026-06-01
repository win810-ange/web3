<?php
    include('../basedonne/config.php');
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM Etudiant WHERE id = ?");
    $stmt->execute([$id]);
    $resultats = $stmt->fetch();

    if (isset($_POST['btnsub'])){
        $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $telephone = $_POST['numero'];
      $Faculte = $_POST['faculte'];
      $departement = $_POST['departement'];
      $niveau = $_POST['niveau'];
      $stmt = $pdo->prepare("UPDATE Etudiant SET nom =:nom, prenom=:prenom, email=:email, telephone=:telephone, Faculte=:Faculte, departement=:departement, niveau=:niveau WHERE id = :id");
      $stmt->execute([ 
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email, 
        'telephone'=>$telephone, 
        'Faculte'=>$Faculte, 
        'departement'=>$departement, 
        'niveau'=>$niveau,
        'id'=>$id
    ]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                        <a href="./Etudians.php" class="nav-link">Liste d'Etudiant</a>
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

    <section class="form-section d-flex align-items-center justify-content-center">
  <div class="glass-card p-5">
        <form action="edit.php" method="post">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom"  name="nom" value="<?=$resultats['nom'] ?>">
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?=$resultats['prenom'] ?>">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?=$resultats['email'] ?>">
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="telephone" name="numero" value="<?=$resultats['telephone'] ?>">
      </div>

      <div class="mb-3">
        <label for="faculte" class="form-label">Faculté</label>
        <input type="text" class="form-control" id="faculte" name="faculte" value="<?=$resultats['Faculte'] ?>">
      </div>

      <div class="mb-3">
        <label for="departement" class="form-label">Département</label>
        <select class="form-select" id="departement" name="departement" value="<?=$resultats['departement'] ?>">
          <option selected>Choisir...</option>
          <option value="Orientation scolaire et professionnelle">Orientation scolaire et professionnelle</option>
          <option value="Gestion et administration des institutions scolaires et de la formation">Gestion et administration des institutions scolaires et de la formation</option>
          <option value="Histoire, sciences sociales et gestion du patrimoine">Histoire, sciences sociales et gestion du patrimoine</option>
          <option value="Français et langues africaines">Français et langues africaines</option>
          <option value="Anglais et cultures africaines">Anglais et cultures africaines</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="niveau" class="form-label" value="<?=$resultats['niveau'] ?>">Niveau</label>
        <select class="form-select" id="Niveau" name="niveau">
          <option selected>Choisir...</option>
          <option value="L1">L1</option>
          <option value="L2">L2</option>
          <option value="L3">L3</option>
          <option value="M1">M1</option>
          <option value="M2">M2</option>
        </select>
      </div>
      </div>
      </section>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Modifier</button>
      </div>
    </form>
</body>
</html>