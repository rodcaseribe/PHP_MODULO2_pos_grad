<?php
  session_start();

   if(isset($_SESSION['UserID']))
     unset($_SESSION['UserID']);

    echo '<a href="entrada.php">Voltar para pagina Inicial</a>';


?>

<?php

//session_destroy();
?>
