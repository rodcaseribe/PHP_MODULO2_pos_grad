<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="javascript.js"></script>
<script language='Javascript'>

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)){  return true;}
    else{
    	if (tecla==8 || tecla==0){ return true;}
	else  return false;
    }
}
</script>

</head>

<body><div align="center">
<form name="form" method="get" action="redir.php"  onSubmit="return validacao();">
Nome:<br>   <input placeholder="Nome" type="text"  name="nome"/><br>
Sobrenome:<br> <input placeholder="Sobrenome"type="text"  name="sobrenome"/><br>
Email:<br>    <input placeholder="email" type="text" name="email"/><br>
Estado:<br>    <input placeholder="estado" type="text" name="estado"/><br>
Cidade:<br>   <input placeholder="cidade" type="text" name="cidade"/><br>
<!--Estado:<input type="text" name="estado"/><br>-->
CEP: <br>   <input placeholder="00000000" type="text" name="cep" value=''onkeypress='return SomenteNumero(event)'/><br>
Telefone:<br> <input placeholder="000000000" type="text" name="telefone" value=''onkeypress='return SomenteNumero(event)'><br>
<!--Email: <input type="text" name="email"/><br>
Senha: <input type="text" name="senha"/><br>-->
          <br> <input type="submit" name="submit" value="enviar"/>
</form></div>
<!--<?php
@$nome = $_POST['nome'];
@$Sobrenome = $_POST['sobrenome'];
@$email = $_POST['email'];
@$estado = $_POST['estado'];
@$cidade = $_POST['cidade'];
@$cep = $_POST['cep'];
@$telefone = $_POST['telefone'];



echo "<div align=center><h3>DADOS:</h3><br>";

echo "<b>nome:</b>$nome<br>";
echo "<b>sobrenome:</b>$sobrenome<br>";
echo "<b>email:</b>$email<br>";
echo "<b>estado:</b>$estado<br>";
echo "<b>cidade:</b>$cidade<br>";
echo "<b>cep:</b>$cep<br>";
echo "<b>telefone:</b>$telefone<br></div>";
?>-->

</body>

</html>
