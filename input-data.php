<html>
    <head>
    <link rel="stylesheet" type="text/css" href="model.css">
</head>
<body>
<div class="wrap">
    <h3>Tambah Daftar Pelanggan</h3>
        <form method="post" action="">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            </tr>
                <td>Nick Name</td>
                <td><input type="text" name="nama_akun"></td>
            </tr>
            <tr>
                <td>ID Game</td>
                <td><input type="text" name="id_game"></td>
            </tr>
            <tr>
                <td>JOKI TO</td>
                <td><input type="text" name="jokian"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Nomor Whatssapp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="simpan"><td>
            </tr>
</table>
<br>
<div class="button">
    <a href="home.php">Kembali ke beranda |</a>
    <a href="data.php">List Pelanggan </a> </div> 
    </form>
</div>
</body>
</html>

<?php
include 'koneksi.php';

if(isset($_POST['save']))
{
    mysqli_query($koneksi,"INSERT INTO joki set
    nama_pelanggan = '$_POST[nama_pelanggan]', 
    email = '$_POST[email]',
    nama_akun = '$_POST[nama_akun]',
    id_game = '$_POST[id_game]',
    jokian= '$_POST[jokian]',
    harga = '$_POST[harga]',
    no_hp = '$_POST[no_hp]'");

    echo "Data Pelanggan baru telah tersimpan";
}
?>
