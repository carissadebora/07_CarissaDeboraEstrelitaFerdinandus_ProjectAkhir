<?php
session_start();//
include 'koneksi.php';//

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);
    

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>greenu-Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><img src="images/greenu_logo.png" height="30px"> <b>Green</b>U</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            <a href="index.html" class="w3-bar-item w3-button">HOME</a>
            <a href="#about" class="w3-bar-item w3-button">ABOUT US</a>
            <a href="login.php" class="w3-bar-item w3-button">LOGIN</a>
            </div>
        </div>
    </div><br><br>
    <!-- header -->
    <header class="w3-container w3-green">
        <h2>Login</h2>
    </header>
    <div class="w3-container w3-third w3-padding-24 w3-center w3-display-middle">
        <form method="POST" class="w3-container w3-card-4 w3-round-xlarge">
            <p>
                <input class="w3-input" type="text" name="username" placeholder="Username" required>
                <label for="username">Username</label>
            </p>
            <p>
                <input class="w3-input" type="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </P>
            <p>
                <button class="w3-input w3-green w3-round-large" type="submit" name="login">Login</button>
            </p>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16 w3-bottom">
        <div class="w3-row-padding w3-grayscale font-10">
            <div class="w3-col l4 m4">
                <i class="fa fa-instagram" style="font-size: 16px;"></i>
                <i class="fa fa-facebook-square" style="font-size: 16px;"></i>
                <i class="fa fa-twitter-square" style="font-size: 16px;"></i>
                <i class="fa fa-linkedin-square" style="font-size: 16px;"></i>
            </div>
        </div>
        <div class="w3-col l4 m4 w3" style="font-size: 18px;">GreenU</div>
        <div class="w3-col l4 m4">Go Green And Sustainable</div>
        </div>
        <div class="w3-row-padding w3-grayscale">
        <div class="w3-col l4 m4 w3-padding">
            <i class="fa fa-phone " style="font-size: 36px;"></i><br>
            +62816-3247-1111
        </div>
        <div class="w3-col l4 m4 w3-padding">
            <i class="fa fa-envelope" style="font-size: 36px;"></i><br>
            email
        </div>
        <div class="w3-col l4 m4 w3-padding">
            <i class="fa fa-map-pin" style="font-size: 36px;"></i><br>
            Building Office
        </div>
        </div>
            <div class="w3-row-padding w3-grayscale font-8">
            <div class="w3-col l4 m4">Copyright (c) 2025. all right reserved</div>
            <div class="w3-col l4 m4">Terms & Conditions</div>
            <div class="w3-col l4 m4">Privacy | term and condition</div>
        </div>
    </footer>
</body>
</html>
