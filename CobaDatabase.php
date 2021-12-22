
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $serverName = "localhost";
    $database = "db_siswa";
    $username ="root";
    $password = "";

    // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$connect = mysqli_connect($serverName, $username, $password, $database);

    
    $nama = $_POST ['nama'];
    $alamat =$_POST['alamat'];
    $umur = $_POST['umur'];
    $nomor = $_POST['hp'];
    $Hobby = $_POST['Hobi'];
    
    $query = mysqli_query ($connect, "INSERT INTO tb_siswa(nama_siswa,alamat_siswa,umur_siswa,nomor_hp,id_hobby) 
    values('$nama','$alamat','$umur', '$nomor','$Hobby')");
    $sql = 'select * from tb_siswa';
    
   // $tampil=mysqli_query($query,$sql);
       echo $query;
        echo 'Nama Anda :'.$_POST["nama"].'<br>';
        echo 'Alamat :'.$_POST["alamat"].'<br>';
        echo 'Umur Anda : '.$_POST["umur"].'<br>';
        echo 'Nomor HP :'.$_POST["hp"].'<br>';
        echo 'Hobi Pelanggan : '.$_POST["Hobi"].'<br>';
        echo '<pre>'; print_r($_POST);// untuk menampilkan array yang di tampung
        
// mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
    
}else{
    echo "Koneksi berhasil";
}

mysqli_close($connect);

?>


<table border="1px">
    <tr>    
        <th>No</th>
        <th> Id </th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Hobby</th>
        <th>nomor HP</th>
    </tr>

    <?php
        $no = 1;
        $ambildata = mysqli_connect ($sql);

        while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nama_siswa]</td>
        ";
        }

    ?>
   </table>
</body>
</html>

