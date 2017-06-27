<html>
<head>
<meta charset="UTF-8">
<title>Exemplo de página em PHP com ArrayList</title>
<style>
b { 
    color:red;
}
</style>
</head>
<body bgcolor="#b3d9ff">
	<?php
	    echo "<b>Exemplo de ArrayList horizontal c/ posição</b><br>".'<br>';
 		$num = array(1, 2, 3, 4, 5);
 		print_r($num);
	?>
<br><br><b>Especificando um Array</b><br><br>


	<?php
		$letra = array('a', 'b', 'c');
		echo $letra[0];

	?>


<br><br><b>Loop FOREACH</b></br></br>



	<?php 
$zz = array("1a", "2a", "3a", "4a"); 

foreach ($zz as $zz2) {
	echo '<pre>';
    print_r($zz2);
    echo '</pre>';
}
?>

<br><br><b>Exemplo Array list vertical</b></br></br>
<?php
	

$referencia = Array("Texto 1", "Texto 2", "Texto 3", "Texto 4", "Texto5");

echo '<pre>';
print_r($referencia);
echo '</pre>';

?>

<br><br><b>Concatenação</b></br></br>


<?php
  $array = array ("meunome", "eh", "rodolfo");
  $frase = implode ('.', $array);
  echo ($frase);
?>



<br><br><b>Exemplo Array list vertical 2</b></br></br>


<?php

$numeros = array(1=>"numero1", 2=>"numero2",3=>"numero3",4=>"numero4", 5=>"numero5");
$numeros[6]= "numero6";

$contador = count($numeros);
echo "Numero de Linhas = ".$contador."</br>";
echo "<br/>";


foreach($numeros as $ref):
	echo $ref."<br/>";
endforeach;


?>




<br><br><b>Pegando somente a posição do vetor</b></br></br>

<?php

$numeros = array(1=>"numero1", 2=>"numero2",3=>"numero3",4=>"numero4", 5=>"numero5");
$numeros[6]= "numero6";

$posicao = array_keys($numeros);


foreach($posicao as $ref):
	echo $ref."<br/>";
endforeach;


?>


<br><br><b color="red">Localizando posição se existe</b></br></br>


<?php

$numeros = array(1=>"numero1", 2=>"numero2",3=>"numero3",4=>"numero4", 5=>"numero5");
$numeros[6]= "numero6";

$posicao = array_keys($numeros);

$posicao2 = 9;


if (array_key_exists($posicao2, $numeros)):
	echo "Existe a posicao $posicao2 no array nomes";
else:
	echo "nao existe";
endif;


?>




</body>
</html>