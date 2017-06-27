<?php


 session_start();
 if(isset($_SESSION['UserID']))
 {
   echo "bem vindo".$_SESSION['UserID'];
   echo '<a href="saida.php">Logout</a>';
 }
 else
   echo "faça login";



?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
</body>
</html>
