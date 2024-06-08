<html>
    <head>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<h2> DATA PELANGGAN </h2>

<table border="1" cellspasing="0" align="center" >
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Email Akun</th>
        <th>Nick Name</th>
        <th>ID Game</th>
        <th>Joki To</th>
        <th>Harga</th>
        <th>Whatssapp</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include 'koneksi.php';
    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT * FROM joki");
    while($tampil = mysqli_fetch_array($ambildata))
    {
        $warna = ($no%2==1)?"white":"#eee";

        echo "<tr bgcolor='$warna'>
                <td>$no</td>
                <td>$tampil[nama_pelanggan]</td>
                <td>$tampil[email]</td>
                <td>$tampil[nama_akun]</td>
                <td>$tampil[id_game]</td>
                <td>$tampil[jokian]</td>
                <td>$tampil[harga]</td>
                <td>$tampil[no_hp]</td>
                <td><a href='ubah-data.php?kode=$tampil[ID]'><input type='button' class='button-edit'></a></td>
                <td><a href='?kode=$tampil[ID]'><input type='button' class='button-delete'></td>
            </tr>";
        $no++;
    }
    ?>
</table>
<br>
        <div class="button">
            <a href="home.php">Kembali ke beranda </a>
        </div>
</body>
</html>

<?php
if(isset($_GET['kode']))
{
    mysqli_query($koneksi,"DELETE FROM joki WHERE ID='$_GET[kode]'");

    echo "<meta http-equiv=refresh content=2;URL='data.php'>";
}
?>