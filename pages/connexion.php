<?php
    session_start();
    if (isset($_POST['btn'])){
        $nom = $_POST['username'];
        $motdepasse = $_POST['motdepasse'];
        if ($nom == "administrateur" && $motdepasse == "willy1234willy"){
            $_SESSION['username'] = "administrateur";
            header('location:Etudians.php');

        } else {
            echo '<script>alert("vous n etes pas administrateur")</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="glass-card p-5">
        <form action="" method="post">
        <input type="text" class="form-control" name="username" placeholder="entrez votre nom">
        <input type="password" class="" name="motdepasse" placeholder="entrez votre mot de passe">
        <input type="submit" class="btn btn-primary btn-lg" value="conecter" name="btn">
        </form>
    </div>
    <a href="../index.php">Retour Accueil</a>
</body>
</html>