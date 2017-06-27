<?php
echo '<div align=center><table class="bordasimples"><tr><th>1 <br>coluna</th><th>2<br>coluna</th><th>3 <br>coluna</th><th>4 <br>coluna</th><th>5 <br>coluna</th></tr>';
for($i=0;$i<=4;$i++)
{
 echo '<tr>';
 for($j=0;$j<=4;$j++)
 { $matriz[$i][$j] = ($i+1) * ($j+1);
 echo '<td>'.$matriz[$i][$j].'</td>';
 }
 echo '</tr>';
}
echo '</table></div>';
?>


<html><head><style type="text/css">
   table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid black;
    text-align: center;
}
th, td {
    
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style></head>
<body></body>
</html>