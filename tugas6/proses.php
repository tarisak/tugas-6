<?php
//pengecekan kondisi data input
if (empty($_GET['nama']) || (empty($_GET['email']))) {
    header("Location:redirect.php");
} else {
    echo "<center> Welcome back ".$_GET['nama']."!</center><br>";
    echo "<center>============================</center>";
    echo "<center> You're login as ".$_GET['email']."</center><br>";
}
?>