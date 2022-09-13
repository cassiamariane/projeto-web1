<?php
//connecting to mysql
$servername = "localhost";
$username = "root";
$password = "";
$database = "progae";

$connect = mysqli_connect($servername, $username, $password, $database);
//mysqli is used for both procedural and OO php, while mysql pdo
//is only used for OO
if (mysqli_connect_error()) {
    echo "Falha na conexão: ".mysqli_connect_error();
}