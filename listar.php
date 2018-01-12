<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();
//include("menu.html");

//$link = mysqli_connect("localhost", "root", "udesc", "biblioteca");
$link = mysqli_connect("localhost", "root", "", "sistema");
	
$query = "SELECT * FROM empresa ORDER BY nome";
$result = mysqli_query($link, $query);

//echo "SELECT: $query<br>";
echo "<table border=\"1\">";
echo "<tr><td><b>Nome</b></td>";
echo "<td><b>Razão Social</b></td>";
echo "<td><b>CNPJ</b></td>";
echo "<td><b>DDD</b></td>";
echo "<td><b>Telefone</b></td>";
echo "<td><b>Site</b></td></tr>";
while ($row = mysqli_fetch_row($result)) {
	echo "<tr><td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
	echo "<td>".$row[5]."</td></tr>";
}
echo "</table><hr>";

mysqli_close($link);

echo "<a href=novo.html>Adicionar Empresa</a><br>";
echo "<a href=remover.html>Remover Empresa</a><br>";

?>
