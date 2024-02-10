<?php
if(isset($_POST['submit'])) {
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
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Dasboard</title>
    <link rel="stylesheet" href="css/style.css ?v= <?php echo time();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                    <a href="" class="active"><span class="bi bi-folder-plus"></span>
                    <span>Input</span></a>
                </li>

                <li>
                    <a href="transaction.html"><span class="bi bi-arrow-left-right"></span>
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
                Input
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

    <!-- TABEL INPUT -->
    <div class="form-container">
        <form action="input_material.php" method="POST">
            <!-- material -->
            <fieldset>
                <legend>
                    <input type="checkbox" id="material_checkbox" name="columns[]" value="material" style="vertical-align: middle;">
                    Material
                </legend>
    
                <div class="input-group">
                    <label for="id_material">ID Material:</label>
                    <input type="text" id="id_material" name="id_material" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">Material Name:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">Description:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">UOM:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">Min Stock:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
    
            </fieldset>
    
            <!-- Project -->
            <fieldset>
                <legend>
                    <input type="checkbox" id="material_checkbox" name="columns[]" value="material" style="vertical-align: middle;">
                    Project
                </legend>
    
                <div class="input-group">
                    <label for="id_material">Project Name:</label>
                    <input type="text" id="id_material" name="id_material" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">WBS Allocation:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
    
            </fieldset>
    
            <!-- Storage -->
            <fieldset>
                <legend>
                    <input type="checkbox" id="material_checkbox" name="columns[]" value="material" style="vertical-align: middle;">
                    Storage
                </legend>
    
                <div class="input-group">
                    <label for="id_material">Storage:</label>
                    <input type="text" id="id_material" name="id_material" required>
                </div>
        
                <div class="input-group">
                    <label for="material_name">Storage Type:</label>
                    <input type="text" id="material_name" name="material_name" required>
                </div>
    
            </fieldset>
    
            <button type="submit">Submit</button>
            <button type="button" onclick="window.location.href='';">Cancel</button>
        </form>
    </div>
    
    
    <script src="js/script.js"></script> <!-- JS -->
</body>
</html>
