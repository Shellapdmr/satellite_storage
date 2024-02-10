<?php
print_r($_POST);

    $id_transaction = $_POST['id_transaction'];
    $id_material = $_POST['id_material'];
    $material_name = $_POST['material_name'];
    $storage_asal = $_POST['storage_asal'];
    $storage_tujuan = $_POST['storage_tujuan'];
    $tanggal_transfer = $_POST['tanggal_transfer'];
    $jumlah_material = $_POST['jumlah_material'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO transaction_in(id_transaction, id_material, material_name, storage_asal, storage_tujuan, jumlah_material, tanggal_transfer) values 
    ('$id_transaction','$id_material', '$material_name', '$storage_asal', '$storage_tujuan', '$jumlah_material', '$tanggal_transfer')";
    mysqli_query($conn,$sql);

    $url = "transactionIn.php";
    header('Location: '.$url);
?>