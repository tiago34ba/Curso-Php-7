
<?php

$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("delete from usuario where idusuario = :idusuario");

$idusuario=1;

$stmt->execute(array($idusuario));

//$conn->rollBack();

$conn->commit();
echo "Dados Deletado com sucesso!!!";



