<?php
if(isset($_POST['submit'])) {
    $mineArea = $_POST["m-area"];
    $department = $_POST['dept'];
    $section = $_POST['sect'];
    $username = $_POST['usn'];
    $password = $_POST['pass'];
    $levelUser = $_POST['level'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'satellite_storage';
    $port = 3308;

    $conn = mysqli_connect($host,$user,$pass,$dbname,$port);

    $sql = "INSERT INTO register(mineArea, department, section, username, password, levelUser) values ('$mineArea', '$department', '$section', '$username', '$password', '$levelUser')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/register.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <section class="content">
                <img src="photo/freeport.png">
            </section>
        </div>
        <div class="right">
                <form action="input_register.php" method="POST">
                <h1>UNDERGROUND SATELLITE STORAGE</h1>
                <div class="login-form">
                    <label for="m-area">MINE AREA</label>
                    <input id="m-area" name="m-area" type="text">

                    <label for="dept">DEPARTMENT</label>
                    <input id="dept" name="dept" type="dept">

                    <label for="sect">SECTION</label>
                    <input id="sect" name="sect" type="sect">

                    <label for="usn">USERNAME</label>
                    <input id="usn" name="usn" type="usn">

                    <label for="pass">PASSWORD</label>
                    <input id="pass" name="pass" type="pass">

                </div>
                <button class="register-btn" type="submit">Register</button>
                </form>
        </div>
    </div>
</body>
</html>
