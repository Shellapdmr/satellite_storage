<?php
if(isset($_POST['submit'])) {
    $username = $_POST['usn'];
    $password = $_POST['pass'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO login(username, password) values ('$username', '$password')";
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
                    <a href="" class="active"><span class="bi bi-columns-gap"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="input.php"><span class="bi bi-folder-plus"></span>
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
            <div class="paket">
                <label for="nav-toggle">
                    <span class="bi bi-list"></span>
                </label>
                <h2>Dashboard</h2>
            </div>

            
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
</body>
</html>
