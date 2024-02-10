<?php
if(isset($_POST['submit'])) {
    $id_transaction = $_POST['id_transaction'];
    $id_material = $_POST['id_material'];
    $material_name = $_POST['material_name'];
    $storage_asal = $_POST['storage_asal'];
    $storage_tujuan = $_POST['storage_tujuan'];
    $jumlah_material = $_POST['jumlah_material'];
    $tanggal_transfer = $_POST['tanggal_transfer'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO transaction_in(id_transaction, id_material, material_name, storage_asal, storage_tujuan, jumlah_material, tanggal_transfer) values ('$id_transaction','$id_material', '$material_name', '$storage_asal', '$storage_tujuan', '$tanggal_transfer', '$jumlah_material')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction In Form</title>
    <link rel="stylesheet" href="css/login.css ?v=<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript (untuk Dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>PTFI</h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><span class="bi bi-columns-gap"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="input.php"><span class="bi bi-folder-plus"></span>
                    <span>Input</span></a>
                </li>

                <li>
                    <a href="" class="active"><span class="bi bi-arrow-left-right"></span>
                    <span>Transaksi</span></a>
                </li>

                <li>
                    <a href="report.html"><span class="bi bi-clipboard-data"></span>
                    <span>Report</span></a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="bi bi-list"></span>
                </label>
                Transaction
            </h2>

            <div class="search-wrapper">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                </div>
                <input type="text" class="input">
            </div>

            <div class="user-wrapper">
                <span class="bi bi-person-circle"></span>
                <div>
                    <h4>Na Jaemin</h4>
                    <small>Admin</small>
                </div>
            </div>

        </header>
    </div>
    
    <script src="js/script.js"></script> <!-- JS -->
<form action="input_transactionIn.php" method="POST">
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

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Storage Asal 
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <li class="dropdown-item dropdown-toggle" type="button" id="redpathDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Redpath Construction
            <ul class="dropdown-menu" aria-labelledby="redpathDropdown">
                <li><button class="dropdown-item" type="button">GMBL</button></li>
                <li><button class="dropdown-item" type="button">RCBK</button></li>
                <li><button class="dropdown-item" type="button">Jakarta Yard</button></li>
                <li><button class="dropdown-item" type="button">Makassar Yard</button></li>
                <li><button class="dropdown-item" type="button">32BR</button></li>
                <li><button class="dropdown-item" type="button">KKPR</button></li>
                <li><button class="dropdown-item" type="button">SGRD</button></li>
                <li><button class="dropdown-item" type="button">68YL</button></li>
                <li><button class="dropdown-item" type="button">LEBR</button></li>
                <li><button class="dropdown-item" type="button">RCGN</button></li>
                <li><button class="dropdown-item" type="button">RCBK</button></li>
                <li><button class="dropdown-item" type="button">Jakarta Yard</button></li>
                <li><button class="dropdown-item" type="button">Makassar Yard</button></li>
            </ul>
        </li>
        <li>
            <button class="dropdown-item dropdown-toggle" type="button" id="rucDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                RUC Construction
            </button>

            <button class="dropdown-item dropdown-toggle" type="button" id="rucDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Rail Construction
            </button>
        </li>
    </ul>
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
