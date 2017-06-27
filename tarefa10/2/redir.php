<?php
@$nome = $_GET['nome'];
@$sobrenome = $_GET['sobrenome'];
@$email = $_GET['email'];
@$estado = $_GET['estado'];
@$cidade = $_GET['cidade'];
@$cep = $_GET['cep'];
@$telefone = $_GET['telefone'];



echo "<div align=center><h3>DADOS:</h3><br>";

echo "<b>nome:</b>$nome<br>";
echo "<b>sobrenome:</b>$sobrenome<br>";
echo "<b>email:</b>$email<br>";
echo "<b>estado:</b>$estado<br>";
echo "<b>cidade:</b>$cidade<br>";
echo "<b>cep:</b>$cep<br>";
echo "<b>telefone:</b>$telefone<br></div>";
?>
