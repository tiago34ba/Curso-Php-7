<?php

$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$stmt = $conn->prepare("insert into usurio(login, senha,cadastro) VALUE(:login,:senha,:cadastro)");

$login = "Rita";
$senha = "123456";
$cadastro = "UniJorge";

$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":cadastro", $cadastro);

$stmt->execute();

echo "Dados cadastrado com sucesso!!!";