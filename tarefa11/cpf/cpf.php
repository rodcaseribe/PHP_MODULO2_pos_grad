<html>
<head><meta charset="UTF-8">
<title>Validação de CPF</title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="javascript.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ruda" rel="stylesheet">
</head>

<body><div align="center">
<form name="form" method="post" action="<?php $_PHPSELF; ?>" onSubmit="return validacao();">
<h2>CPF:</h2><br>   <input id="arr" placeholder="CPF" type="text"  name="cpf"/><br>
<input type="submit" name="submit" value="enviar"/>
</form></div>

</body>

<?php
@$cpf = $_POST['cpf']; //recebimento de dados
echo "<div align=center><b></b>$cpf<br></div>";

?>

</html>
<?php


function validaCPF($cpf){  //chamada da função
$cpf = preg_replace('/[^0-9]/','',$cpf); //expressões regulares

$digitoA = 0;
$digitoB = 0;

//echo $cpf.'<hr/>';
for($i=0,$x=10;$i <=8; $i++, $x--){  //distrbuindo os valores e multiplicando
	$digitoA += $cpf[$i] * $x;
//echo '<br/>;
}

for($i=0,$x=11;$i <=9; $i++, $x--){ //calculo modulo 11
    if(str_repeat($i, 11) == $cpf){
	   return false;
	}

        $digitoB += $cpf[$i] * $x;
//echo '<br/>;
}

$somaA = (($digitoA%11) <2) ? 0 : 11-($digitoA%11); //calc1
$somaB = (($digitoB%11) <2) ? 0 : 11-($digitoB%11); //calc2

//echo $somaB;


if ($somaA != $cpf[9] || $somaB != $cpf[10]){
     return false;  //junção
}else{
     return true;
}

}


if(empty($cpf)){ //input
        echo '<div align=center>Digite um CPF:</div>';
}


//if (isset(validaCPF($cpf))){
//	echo '<div align=center>eroo</div>';
//}




elseif (validaCPF($cpf)){  //prints
	echo '<div align=center>CPF válido</div>';
}else{
	echo '<div align=center>CPF Invalido</div>';
}

?>
