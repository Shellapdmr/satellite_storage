<?php
print_r($_POST);

$mineArea = $_POST["m-area"];
$department = $_POST["dept"];
$section = $_POST["sect"];
$username = $_POST["usn"];
$password = $_POST["pass"];
$levelUser = $_POST["level"];   
$host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    
    $sql = "INSERT INTO register(mineArea, department, section, username, password, levelUser) values ('$mineArea', '$department', '$section', '$username', '$password', '$levelUser')";
    mysqli_query($conn,$sql);
    $url = "register.php";
    header('Location: '.$url);
?>