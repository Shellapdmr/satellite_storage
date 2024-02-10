<?php
print_r($_POST);

$username = $_POST["usn"];
$password = $_POST["pass"]; 
$host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    
    $sql = "INSERT INTO login(username, password) values ('$username', '$password')";
    mysqli_query($conn,$sql);
    $url = "login.php";
    header('Location: '.$url);
?>