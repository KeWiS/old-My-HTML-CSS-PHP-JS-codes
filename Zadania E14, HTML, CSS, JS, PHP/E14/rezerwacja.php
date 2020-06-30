<?php

echo "Dodano rezerwację do bazy";

$server = "localhost";
$user = "root";
$pwd = "";
$database = "baza";

$connect = mysqli_connect($server, $user, $pwd, $database);

$data = $_POST['data'];
$osoby = $_POST['osoby'];
$telefon = $_POST['telefon'];

$query = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) values('$data', '$osoby', '$telefon')";
echo $query;
mysqli_query($connect, $query);
mysqli_close($connect);

?>