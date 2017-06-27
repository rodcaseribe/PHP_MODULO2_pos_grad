<?php

echo "<font color=red>"."Aleatoriedade por for com rand sem tempo do pc"."</font>"."<br>";

        for($i=0; $i<10; $i++){
        echo(rand()%10);
        // srand(mktime());
        //echo(rand());
}



echo "<font color=red><br><br>"."Aleatoriedade com tempo do pc"."</font><br>";

srand(mktime());
echo(rand());





//date_default_timezone_set('America/Sao_Paulo');
//date = date('Y-m-d H:i');
//echo "<br>".$date;


echo "<font color=red><br><br>"."Printando  diretamente os 3 elementos em formato de máquina"."</font>";
$mes = date('M');
echo "<br>".$mes;





echo "<font color=red><br><br>"."Printando dia em fomato de máquina"."</font>";
$dia = date('d');
echo "<br><br>".$dia;





echo "<font color=red><br><br>"."Printando ano em fomato de máquina"."</font>";
$ano = date('Y');
echo "<br>".$ano;



echo "<br><br><font color=red>"."restringindo 3 elementos iniciais do ano"."</font>";
$str = $ano[0].$ano[1].$ano[2];
echo "<br>".$str;



echo "<br><br><font color=red>"."restringindo 3 elementos iniciais do mes"."</font>";
$str2 = $mes[0].$mes[1].$mes[2];
echo "<br>".$str2;

?>
