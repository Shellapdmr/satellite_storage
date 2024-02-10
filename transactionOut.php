<?php
if(isset($_POST['submit'])) {
    $id_transaction = $_POST['id_transaction'];
    $id_material = $_POST['id_material'];
    $material_name = $_POST['material_name'];
    $storage_asal = $_POST['storage_asal'];
    $project_name = $_POST['project_name'];
    $jumlah_material = $_POST['jumlah_material'];
    $tanggal_transfer = $_POST['tanggal_transfer'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO transaction_out(id_transaction, id_material, material_name, storage_asal, project_name, jumlah_material, tanggal_transfer) values ('$id_transaction','$id_material', '$material_name', '$storage_asal', '$project_name', '$tanggal_transfer', '$jumlah_material')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Out Form</title>
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<body>
<form action="input_transactionOut.php" method="POST">
    <fieldset>
        <legend>
            TRANSACTION
            <label class="radio-inline">
                <input type="radio" name="inradio" id="inradio1" value="opsi1" checked>
                IN
            </label>
            <label class="radio-inline">
                <input type="radio" name="inradio" id="inradio2" value="opsi2">
                OUT
            </label>
        </legend>

        <div class="input-group">
            <label for="id_material">Nama Material:</label>
            <input type="text" id="id_material" name="id_material" required>
        </div>

        <div class="input-group">
            <label for="material_name">Nomor Material:</label>
            <input type="text" id="material_name" name="material_name" required>
        </div>

        <div class="input-group">
            <label for="material_name">Storage Asal:</label>
            <input type="text" id="material_name" name="material_name" required>
        </div>

        <div class="input-group">
            <label for="material_name">Nama Proyek:</label>
            <input type="text" id="material_name" name="material_name" required>
        </div>

        <div class="input-group">
            <label for="material_name">Min Stock:</label>
            <input type="text" id="material_name" name="material_name" required>
        </div>
    </fieldset>

    <button type="submit">Transfer Material</button>
</form>
    
</body>
</html>
