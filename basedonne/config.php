<?php 
    $user = 'root';
    $host = 'localhost';
    $base = 'ispgombe';
    $motpasse = 'willy1234willy';
    $pdo = new PDO("mysql:host=$host;dbname=$base",$user,$motpasse);
   if (!$pdo){
    echo '
        <script> alert("quelque chose s est mal passé") </script>
    ';
   }

?>