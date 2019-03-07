<?php

$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$stmt = $conn->prepare("update usurio set :login = login, :senha = senha where usuario = :id");

$id = 1;
$login = "Paulo Tiago";
$senha = "091232";
$cadastro = "Estacio";


$stmt->bindParam(":id", $id);
$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":cadastro", $cadastro);


$stmt->execute();

echo "Dados Atualizado com Sucesso!!!"
?>