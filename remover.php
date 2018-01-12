<?php

$nome = $_GET['nome'];
$conexao = mysqli_connect('localhost', 'root', '', 'sistema');

$consulta = "DELETE FROM empresa WHERE nome='$nome'";
//echo "DELETAR: $consulta<br><hr>";
mysqli_query($conexao, $consulta);
mysqli_close($conexao);

if ($consulta) {
        echo 'Dados removidos com sucesso<br>';
        echo "<a href=listar.php>Listar Empresas</a><br>";
        echo "<a href=novo.html>Adicionar Empresa</a><br>";
        echo "<a href=remover.html>Remover Empresa</a><br>";
    } else {
        echo "Problemas na remoção<br>";
        echo "<a href=listar.php>Listar Empresas</a><br>";
        echo "<a href=novo.html>Adicionar Empresa</a><br>";
        echo "<a href=remover.html>Remover Empresa</a><br>";
    }

?>