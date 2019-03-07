<?php
//conexão com Banco de dados MySql
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$stmt = $conn->prepare("select *from usuario");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row){

foreach ($row as $key => $value){
    echo "<strong>" .$key."</strong>" .$value. "<br/>" ;
}
echo "======================================================<br>";
}
