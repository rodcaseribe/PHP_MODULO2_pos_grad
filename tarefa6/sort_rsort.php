<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
	$the_array = array("1", "7", "2", "12",  "5");
	echo "Teste com sort, 'Ordem Crescente:       '";
	sort($the_array);
	print join(", ", $the_array);
	echo "<br>";
	echo "Teste com rsort, 'Ordem Decrescente:    '";
	rsort($the_array);
	print join(", ", $the_array);
?>
</body>
</html>
