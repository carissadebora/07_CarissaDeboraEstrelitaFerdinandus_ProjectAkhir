<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['username'])) {
// Cek apakah form telah disubmit
if(isset($_POST['submit'])){
    // Ambil data dari form
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname']; // Menangkap nama lengkap dari form
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $activity = $_POST['activity'];
    $reason = $_POST['reason'];
    $date = $_POST['date'];
    $status =0;
    if(isset($_POST['status'])){
        $status= 1;
    }
    $community = $_POST['community'];

    // Simpan data ke database
    $query = "INSERT INTO volunteer(phone, fullname, age, gender, activity, reason, activitydate, status, community) VALUES ('$phone','$fullname','$age','$gender','$activity','$reason','$date','$status','$community')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman home setelah input data sukses
        echo "<script>alert('input data berhasil!');
        window.location='home.php';</script>";
    } else {
        // Tampilkan pesan error jika input data gagal
        echo "Gagal menambah data!";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>greenu-home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><img src="images/greenu_logo.png" height="30px"> <b>Green</b>U</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <a href="home.php" class="w3-bar-item w3-button">INPUT DATA</a>
        <a href="show.php" class="w3-bar-item w3-button">SHOW DATA</a>
        <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
        </div>
    </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <br>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">


    <!-- volunteer Section -->
     <div class="w3-container w3-green">
        <h2>input data</h2>
</div>
    <div class="w3-container w3-padding-24">
        <form method="POST" class="w3-container w3-card-4 w3-round-xlarge">
            <p>
                <label for="phone">Nomor Hp :</label>
                <input class="w3-input" type="text" name="phone" placeholder="Nomor Hp" required>
            </p>
            <p>
                <label for="fullname">Nama lengkap :</label>
                <input class="w3-input" type="text" name="fullname" placeholder="nama lengkap" required>
            </p>
            <p>
                <label for="gender">jenis kelamin :</label>
                <select class="w3-select" name="gender">
                    <option value="" disabled selected>pilih jenis kelamin</option>
                    <option value="male">laki-laki</option>
                    <option value="female">perempuan</option>
                </select>
            </p>
            <p>
                <label for="age">umur :</label>
                <input class="w3-input" type="number" min="0" name="age" placeholder="umur" required>
            </p>
            <p>
                <label for="activity">aktivitas yang ingin di ikuti :</label>
                <input class="w3-input" type="text" name="activity" placeholder="aktivitas yang ingin di ikuti" required>
            </p>
            <p>
                <label for="reason">alasan :</label>
                <input class="w3-input" type="text" name="reason" placeholder="alasan" required>
            </p>
            <p>
                <label for="date">tanggal aktivitas :</label>
                <input class="w3-input" type="date" name="date" placeholder="tanggal aktivitas" required>
            </p>
            <p>
                <label for="status">status :</label>
                <input class="w3-check" type="checkbox" name="status">
                <label>setuju mengikuti kegiatan dan menjaga alam sekitar</label>
            </p>
            <p>
                <label for="community">Asal komunitas/sekolah/instansi :</label>
                <input class="w3-input" type="text" name="community" placeholder="Asal komunitas/sekolah/instansi :" required>
            </p>
            <p>
                <button class="w3-button w3-green w3-round-large" type="submit" name="submit">Simpan</button>
            </p>
        </form>
    </div>
    

    <!-- End page content -->
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
<?php
} else {
    header("Location: login.php");
}
?>