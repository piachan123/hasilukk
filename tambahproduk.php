<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:login.php?pesan=belum_login");
    }

    //konek database
    include 'koneksi.php';

    // cek ketika klik submit, insert form data ke tbl_pendaftar.
    if(isset($_POST['Submit'])) 
    {
        $ProdukID=$_POST['ProdukID'];
        $NamaProduk=$_POST['NamaProduk'];
        $Harga=$_POST['Harga'];
        $Stok=$_POST['Stok'];

        // Memasukan user baru ke table
        $insertdata=mysqli_query($conn,"insert into produk (ProdukID,NamaProduk,Harga,Stok) VALUES('$ProdukID','$NamaProduk','$Harga','$Stok')");

        // Tambahkan pesan ketika berhasil ditambahkan
        echo "Barang berhasil ditambah.";
    }
?>

<html>
    <head>
        <title>Tambah Produk</title>
    </head>
<title></title>
<center><body>
        <h2>Tambah Produk Baru</h2>
        <br/>

        <form action="tambahproduk.php" method="post" name="formtambah">
            <table width="25%" border="0">
                <tr> 
                    <td>ID Produk</td>
                    <td><input type="text" name="ProdukID"></td>
                </tr>

                <tr> 
                    <td>Nama Produk</td>
                    <td><input type="text" name="NamaProduk"></td>
                </tr>

                <tr> 
                    <td>Harga</td>
                    <td><input type="text" name="Harga"></td>
                </tr>

                <tr> 
                    <td>Stok</td>
                    <td><input type="number" name="Stok"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="Tambah"></td>
                </tr>
            </table>
        </form>
        <a href="produk.php">Kembali</a>

    </body></center>
</html>