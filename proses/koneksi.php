<?php
    $conn=mysqli_connect('localhost','root','','shindy_toko');
        if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>