<!DOCTYPE html>
<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:login.php?pesan=belum_login");
    }
?>

<html>
<head>
 <title>update</title>
</head>
<center><body>
 

 <br/>
 <br/>
 <br/>
 <h2>EDIT DATA PRODUK</h2>
 
 <a href="produk.php">KEMBALI</a>
 <br/>
 <?php
 include 'koneksi.php';
 $ProdukID = $_GET['ProdukID'];
 $data = mysqli_query($conn,"select * from produk where ProdukID='$ProdukID'");
 while($d = mysqli_fetch_array($data)){
 ?>
 <form method="post" action="updateproduk.php">
 <table>
 <tr> 
 <td>Nama Produk</td>
 <td>
 <input type="hidden" name="ProdukID" value="<?php echo $d['ProdukID']; ?>">
 <input type="text" name="NamaProduk" value="<?php echo $d['NamaProduk']; ?>">
 </td>
 </tr>
 <tr>
 <td>Harga</td>
 <td><input type="text" name="Harga" value="<?php echo $d['Harga']; ?>"></td>
 </tr>
 <tr>
 <td>Stok</td>
 <td><input type="number" name="Stok" value="<?php echo $d['Stok']; ?>"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr> 
 </table>
 </form>
 <?php 
 }
 ?>
 
</body></center>
</html>