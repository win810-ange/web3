<?php 
   
    $pdo = new PDO("mysql://root:GjuJdPzwOtsaPbRgNEjItijqatwNDezh@shortline.proxy.rlwy.net:43045/railway");
   if (!$pdo){
    echo '
        <script> alert("quelque chose s est mal passé") </script>
    ';
   }

?>