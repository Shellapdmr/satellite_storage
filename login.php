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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <section class="content">
                <img src="photo/freeport.png">
            </section>
        </div>
        <div class="right">
                <form action="input_login.php" method="POST">
                <h1>UNDERGROUND SATELLITE STORAGE</h1>
                <div class="login-form">
                    <label for="usn">USERNAME</label>
                    <input id="usn" name="usn" type="usn">

                    <label for="pass">PASSWORD</label>
                    <input id="pass" name="pass" type="pass">
                </div>
                <a href="index.php" class="login-btn">Login</a>

                <div class="register-btn">
                    <a href="register.php">Register</a>
                </div>
                
                </form>
        </div>

    </div>
    
</body>
</html>
