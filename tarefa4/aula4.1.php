<?php
echo "<div align=center><h3>numeros primos:</h3>"."<br></div>";
for($i=1;$i<=100;$i++)
{
    if(primo($i))
        echo "<div align=center ><b>".$i."</b></div> ";
    else
        echo " ";
}
 
function primo($numero)  //passagem por referencia
{
    $contador=0;
    
    for($i=2;$i<=$numero;$i++)
    {
        if($numero%$i==0) //resto divisivel
        {
            
            if(++$contador>1)  //parada
                return false;
        }
    }
    return true;  //ok
}
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">b{color:red;}</style></head></html>