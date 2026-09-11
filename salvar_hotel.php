<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];

echo "<h1>Hotel cadastrado!</h1>";

echo "Nome do Hotel: " . $nome . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Estrelas: " . $estrelas . "<br>";

echo "<br>";
echo "<a href='cadastro_hotel.html'>Voltar</a>";

?>