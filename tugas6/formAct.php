<?php
    //memanggil file cek data input
    include "proses.php";
    //deklarasi tanggal
    $waktu = date("H:i:sa");  
    $tanggal = date("d-m-Y");  
    echo "<center>Login at : $waktu $tanggal </center>"; 
?>