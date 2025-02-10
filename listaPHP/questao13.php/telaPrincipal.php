<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
    exit();
}

echo "<h2>Você está logado!</h2>";
echo "<a href='logout.php'>Sair</a>";
?>

