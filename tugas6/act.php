<?php 
    $nama=$_POST['nama'];
    $no=$_POST['no'];
    $jenis=$_POST['jenis_kelamin'];
    $TTL=$_POST['TTL'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $status=$_POST['status'];
?>
<html>
    <head>
        <title> Biodata <?php echo $nama ?></title>
    </head>
    <body>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td> Nama </td>
                <td> <?php echo $nama ?> </td>
            </tr>

            <tr>
                <td> No HP </td>
                <td> <?php echo $no ?> </td>
            </tr>

            <tr>
                <td> Jenis Kelamin </td>
                <td> <?php echo $jenis ?> </td>
            </tr>

            <tr>
                <td> TTL </td>
                <td> <?php echo $TTL ?> </td>
            </tr>

            <tr>
                <td> Alamat </td>
                <td> <?php echo $alamat ?> </td>
            </tr>

             <tr>
                <td> Email </td>
                <td> <?php echo $email ?> </td>
            </tr>

            <tr>
                <td> Status </td>
                <td> <?php echo $status ?> </td>
            </tr>

        </table>
    </body>
</html>