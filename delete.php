<?php
    session_start();
    include 'koneksi.php';

    if(isset($_SESSION['username'])) {
    // Cek apakah form telah disubmit
        // ambil data dr get database
        $phone=$_GET['id'];
        // hapus data ke database
        $query = "DELETE FROM volunteer WHERE phone='$phone'";
        // Eksekusi query
        $result = mysqli_query($koneksi, $query);

        // Cek apakah query berhasil
        if($result){
            // Redirect ke halaman home setelah input data sukses
            echo "<script>alert('hapus data berhasil!');
            window.location='home.php';</script>";
        } else {
            // Tampilkan pesan error jika input data gagal
            echo "Gagal menghapus data!";
        }

    } else {
        header("Location: login.php");
    }
?>