<?php
    include ('../basedonne/config.php');
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM Etudiant WHERE id = ?");
    $stmt->execute([$id]);
    $resultats = $stmt->fetch();
    header('location:Etudians.php');


?>
