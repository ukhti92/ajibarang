<?php
    $servername ="localhost";
    $database = "ajibarang";
    $username = "";
    $password = "";

    $conn = mysqli_connect($servername,$database,$username,$password);
    if (!$conn){
        die("koneksi gagal : " . mysqli_connect_error());
    }
    mysqli_close($conn);
?>