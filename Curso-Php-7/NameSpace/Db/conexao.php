<?php

$con = new mysqli("localhost", "root", "", "cursophp7");
if ($con->connect_error) {
    echo "Error:" . $conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO usuario(email,senha)VALUE(?,?");

$stmt->bind_param("ss", "user", "123456");
$login = "user";
$pass = "123456";

$stmt->excute();
