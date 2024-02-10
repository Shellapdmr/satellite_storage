<?php
if(isset($_POST['submit'])) {
    $date_range = $_POST['date_range'];
    $storage_name = $_POST['storage_name'];
    $storage_type = $_POST['storage_type'];
    $project_name = $_POST['project_name'];
    $material_name = $_POST['material_name'];
   
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO report(date_range, storage_name, storage_type, project_name, material_name) values ('$date_range','$storage_name', '$storage_type', '$project_name', '$material_name')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<body>
    
</body>
</html>