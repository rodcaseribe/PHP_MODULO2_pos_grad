<!DOCTYPE html>
<html>
<head>
<style>
p{ color:blue;}
</style>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body bgcolor="#4CAF50">
<h3>Listagem de Produtos</h3>

<?php
$produtos = array("Camisetas", "Bermudas", "Bonés", "Calças", "Jeans", "Calçados", "Tênis","Sapatos");
$arrlength = count($produtos);

for($x = 0; $x < $arrlength; $x++) {
    echo $x." ".$produtos[$x];
    echo "<br>";
    
}

?>

<form action="" method="post" align="center" >
<h3>Digite o código do produto:</h3>
<input type="text" name="codigo" ></input>
<br>
<input  type="submit" name="btnsubmit" value="Enviar">
</form>



<?php
if(isset($_POST['btnsubmit'])){
$variavel_codigo =  $_POST['codigo'];
echo "<br>Seu Produto: <p> ".$produtos[$variavel_codigo]."</p>";
}
?>

<!--<input  type="submit" name="btnsubmit" value="Enviar">
</form>-->

<?php


?>

</body>
</html>
