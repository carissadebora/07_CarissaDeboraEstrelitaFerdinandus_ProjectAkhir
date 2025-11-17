<?php
session_start();
include 'koneksi.php';

if(isset($_SESSION['username'])) {
// Cek apakah form telah disubmit


?>
<!DOCTYPE html>
<html>
<head>
<title>greenu-show</title>
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
        <h2>show data</h2>
    </div>
    <div class="w3-container w3-padding-24">
       <table class="w3-table-all w3-card-4 w3-hoverable w3-centered">
            <tr class="w3-green">
                <th>Full Name</th>
                <th>gender</th>
                <th>age</th>
                <th>activity</th>
                <th>date</th>
                <th>community</th>
                <th>action</th>
                
            </tr>
            <?php
            $volunteer= mysqli_query($koneksi,"select * from volunteer");
            while($data = mysqli_fetch_array($volunteer)){
            ?>
            <tr>
                <td><?php echo $data['fullname'];?></td>
                <td><?php echo $data['gender'];?></td>
                <td><?php echo $data['age'];?></td>
                <td><?php echo $data['activity'];?></td>
                <td><?php echo $data['activitydate'];?></td>
                <td><?php echo $data['community'];?></td>

                <td>
                    <a href="update.php?id=<?php echo $data['phone'];?>">
                        <i class="fa fa-edit w3-text-blue" style="font-size: 18px;"> edit</i>
                    </a>
                    <a href="delete.php?id=<?php echo $data['phone'];?>">
                        <i class="fa fa-remove w3-text-red" style="font-size: 18px;"> del</i>
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
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