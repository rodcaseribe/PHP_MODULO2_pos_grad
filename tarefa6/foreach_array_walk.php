<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
</body>
</html> 
<?php
$teste = array_fill(0, 12345, 'tempo'); //1 indice, numero de elementos, valor
$comeco = microtime(true); //true, retorna um float, horario de inicio

foreach ($teste as $key => $value)
{
    $resultado[$key] = 'tempo';
}

$fim = microtime(true); //horario de fim 
$tempo_fim = $fim - $comeco; //resultado, fim - comeco
printf("Tempo com foreach: "."%0.5fs", $tempo_fim);
?>
<br>

<?php
$teste= array_fill(0, 10000, 'walk');
$comeco2 = microtime(true);

array_walk($teste, function($resultado, $index)
{
    $resultado = 'testando';
});

$fim2 = microtime(true);
$tempo2 = $fim2 - $comeco2;
printf("Tempo com array_walk: "."%0.5fs", $tempo2 );
?>

<h2>Resultado Vencedor: FOREACH</h2><br>
<h4>Awalk aplica-se em cada elemento e ainda não foi otimizado</h4>



<?php
$generos=array("Ação","Suspense","Terror","Musical","Documentário");
print_r($generos);
echo'<br>';
sort($generos);
print_r($generos);
