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

    if (empty($_POST['razaosocial'])) {
        $count += 1;
    } else {
        $razaosocial = $_POST['razaosocial'];
    }

    if (empty($_POST['cnpj'])) {
        $count += 1;
    } else {
        $cnpj = $_POST['cnpj'];
    }

    if (empty($_POST['ddd'])) {
        $count += 1;
    } else {
        $ddd = $_POST['ddd'];
    }

    if (empty($_POST['telefone'])) {
        $count += 1;
    } else {
        $telefone = $_POST['telefone'];
    }

    $site = $_POST['site'];
}

if ($count != 0) {
    echo "Problemas na insersão<br>";
    echo "<a href=listar.php>Listar Empresas</a><br>";
    echo "<a href=novo.html>Adicionar Empresa</a><br>";
    echo "<a href=remover.html>Remover Empresa</a><br>";
} else {
    $link = mysqli_connect("localhost", "root", "", "sistema");
    $query = "INSERT INTO empresa (nome, razaosocial, cnpj, ddd, telefone, site) VALUES ('$nome', '$razaosocial', '$cnpj', '$ddd', '$telefone', '$site')";
//echo "INSERT: $query<br><hr>";
    mysqli_query($link, $query);
    mysqli_close($link);

    if ($query) {
        echo 'Dados inseridos com sucesso<br>';
        echo "<a href=listar.php>Listar Empresas</a><br>";
        echo "<a href=novo.html>Adicionar Empresa</a><br>";
        echo "<a href=remover.html>Remover Empresa</a><br>";
    } else {
        echo "Problemas na insersão<br>";
        echo "<a href=listar.php>Listar Empresas</a><br>";
        echo "<a href=novo.html>Adicionar Empresa</a><br>";
        echo "<a href=remover.html>Remover Empresa</a><br>";
    }
}
?>
