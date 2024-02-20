<!DOCTYPE html>
    <html>
        <head>
             <title>KASIR</title>
 
        </head>
    <center><body>
        <h2>Login - Kasir</h2>
            <!-- cek pesan notifikasi -->
            <?php 
                if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
                }
                }
            ?>
            <br/>

                <form method="post" action="cek_login.php">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="username" placeholder="Masukkan username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password" placeholder="Masukkan password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="LOGIN"></td>
                        </tr>
                </table> 
             </form>
        </body></center>
</html>
