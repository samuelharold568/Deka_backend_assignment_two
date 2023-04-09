<?php
$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'samuel';
$databasePassword = 'Pwd$123456';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if(mysqli_connect_errno()){
    echo "Koneksi database : ", mysqli_connect_error();
}