<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$count = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verifica se todos os campos foram preenchidos
    if (empty($_POST["nome"])) {
        $count += 1;
    } else {
        $nome = $_POST['nome'];
    }
}

if ($count != 0) {
    echo "Nome em branco<br>";
    echo "<a href=listar.php>Listar Empresas</a><br>";
    echo "<a href=novo.html>Adicionar Empresa</a><br>";
    echo "<a href=remover.html>Remover Empresa</a><br>";
} else {
    echo "Deseja remover a empresa $nome do sistema?<br>";
    echo "<td><a href=remover.php?nome=" . $nome . ">Sim</a><br>";
    echo "<td><a href=paginaInicial.html>Não</a>";
}
?>
