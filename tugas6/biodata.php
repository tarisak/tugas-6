<html>
    <head>
        <title> Biodata </title>
    </head>
    <body>
        <h1>Form Biodata </h1>
        <table border=0>
            <form method ="POST" action="act.php">
            Nama : <input type ="text" name = "nama"><br></br>
            No HP : <input type ="text" name = "no"><br></br>
            Jenis Kelamin : 
            <input type="radio" name = "jenis_kelamin" value="L"> Laki - laki
            <input type="radio" name = "jenis_kelamin" value="P"> Perempuan <br></br>
            TTL : <input type ="text" name = "TTL" size=30><br></br>
            Alamat : <input type ="text" name = "alamat" size=40><br></br>
            Email : <input type ="text" name = "email"><br></br>
            Status : <input type ="text" name = "status"><br></br>
            <td>
                <input type="submit" value="Submit" name="kirim">
                <input type="reset" value="Reset" name="hapus">
            </td>
            </form>
        </table>
    </body>
</html>