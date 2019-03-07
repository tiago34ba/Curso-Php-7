
<?php
//conexão com Banco de dados SqlServe
$conn = new PDO("sqlsrv:DATABASE=cursophp7;SERVE=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");

$stmt = $conn->prepare("select *from usuario");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row){

foreach ($row as $key => $value){
    echo "<strong>" .$key."</strong>" .$value. "<br/>" ;
}
echo "======================================================<br>";
}


