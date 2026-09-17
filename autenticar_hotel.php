<?php

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM hoteis WHERE senha = '$senha' AND email = '$email'";

$resultado = mysqli_query(
    $conexao,
    $sql
);

if(mysqli_num_rows($resultado) > 0){
    header("Location: painel_hotel.php");
    exit();
}else{
    header("Location: login_hotel.html");
    exit();
}

?>