<?php

        if (isset($_COOKIE["user"]))
        {
                echo  "Bem vindo".$_COOKIE["user"];
        }
        else
                echo "Por favor faça login";

//print_r($_COOKIE);
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
</body>
</html>
