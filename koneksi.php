<?php
    $koneksi = mysqli_connect("localhost","root","mysql","go_green");
    // cek koneksi
    if(mysqli_connect_error()){
        echo "koneksi database gagal: ". mysqli_connect_error();
    }
?>