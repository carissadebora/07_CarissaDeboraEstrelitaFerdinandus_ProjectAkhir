<?php
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap']; // Menangkap nama lengkap dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	
	// echo "INSERT INTO users (username,password,fullname,address,dateofbirth,age) VALUES ('$username','$password','$nama','$address','$dob','$age')";
    // Simpan data ke database
    $query = "INSERT INTO users (username,password,fullname,address,dateofbirth,age) VALUES ('$username','$password','$nama','$address','$dob','$age')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);
    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>GreenU - Register</title>
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
		  <a href="aboutus.html" class="w3-bar-item w3-button">ABOUT US</a>
		  <a href="login.php" class="w3-bar-item w3-button">LOGIN</a>
		</div>
	  </div>
	</div><br><br>
	
	<header class="w3-container w3-green">
		<h1>Form Registrasi</h1>
	</header>
	<div class="w3-row-padding">
		<form method="POST" class="w3-container w3-card-4 w3-round-xlarge">
			<p>
				<label for="nama_lengkap">Masukkan Nama :</label>
				<input class="w3-input" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
			</p>
			<p>
				<label for="username">Masukkan Username :</label>
				<input class="w3-input" type="text" name="username" placeholder="Username" required>
			</p>
			<p>
				<label for="password">Masukkan Password :</label>
				<input class="w3-input" type="password" name="password" placeholder="Password" required>
			</p>
			<p>
				<label for="address">Masukkan Alamat :</label>
				<input class="w3-input" type="text" name="address" placeholder="Alamat" required>
			</p>
			<p>
				<label for="dob">Masukkan Tanggal Lahir :</label>
				<input class="w3-input" type="date" name="dob" placeholder="Tanggal Lahir" required>
			</p>
			<p>
				<label for="age">Masukkan Umur :</label>
				<input class="w3-input" type="number" min="0" name="age" placeholder="Umur" required>
			</p>
			<p>
				<button class="w3-button w3-green w3-round-large" type="submit" name="register">Daftar</button>
			</p>
		</form>
		<p>Create Account | <a href="login.php">Login di sini</a></p>
	</div>
	
	<!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
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
