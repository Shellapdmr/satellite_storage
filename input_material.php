<?php
print_r($_POST);

    $id_material = $_POST['id_material'];
    $material_name = $_POST['material_name'];
    $description = $_POST['description'];
    $uom = $_POST['uom'];
    $min_stock = $_POST['min_stock'];
    $project_name = $_POST['project_name'];
    $wbsAllocation = $_POST['wbs_allocation'];
    $storage = $_POST['storage'];
    $storage_type = $_POST['storage_type'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO material(id_material, material_name, description, uom, min_stock, project_name, wbs_allocation, storage, storage_type) values ('$id_material', '$material_name', '$description', '$uom', '$min_stock',  '$project_name', '$wbs_allocation', '$storage', '$storage_type')";
    mysqli_query($conn,$sql);

    $url = "new_input.php";
    header('Location: '.$url);
?>