

<?php

$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from usuario where idusuario = :id");

$id=1;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":cadastro", $cadastro);

$stmt->execute();

echo "Dados Deletado com sucesso!!!";

