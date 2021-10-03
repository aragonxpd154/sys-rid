<!DOCTYPE html>
<html>
    <head>
        <style>
            tabela{
            width: 100%;
            border-collapse: collapse;
}

table, td, th{
    border: 1px solid black;
    padding: 5px;
}

td {text-align: left;}
</style>
</head>
<body>

<?php

$db = new mysqli('localhost', 'Administrador', 'G@zeta1234', 'database');
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}
$result = $db->query('SELECT * FROM `Equipamento`');

echo "<table>
<tr>
<th>Nome</th>
<th>Prefixo</th>
<th>Tipo</th>
<th>Canal</th>
<th>Potencia</th>
<th>Frequencia</th>
<th>Posto</th>
</tr>";

if($result){
    
   while ($row = $result->fetch_assoc()){
       
    echo "<tr>";
    echo "<td>" . $row['Nome'] . "</td>";
    echo "<td>" . $row['Prefixo'] . "</td>";
    echo "<td>" . $row['Tipo'] . "</td>";
    echo "<td>" . $row['Canal'] . "</td>";
    echo "<td>" . $row['Potencia'] . "</td>";
    echo "<td>" . $row['Frequencia'] . "</td>";
    echo "<td>" . $row['Posto'] . "</td>";
    echo "</tr>";
       
   }
   $result->free();
}
$db->close();


?>
</body>
</html>