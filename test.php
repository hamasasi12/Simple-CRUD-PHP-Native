<?php
$servername = "localhost";
$databaseAdmin = "root";
$databasePass = "";
$databaseName = "phpdasar";
$db = mysqli_connect($servername,$databaseAdmin,"",$databaseName);

function query($query) {
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}