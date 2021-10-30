<h2>Daftar Inputan</h2>
<table border="1">
    <?php
    include 'CobaDatabase.php';
    echo hallo;

    $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
    $no=1;
    // foreach ($mahasiswa as $row){
    //     $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
    //     echo "<tr>
    //         <td>$no</td>
    //         <td>".$row['nim']."</td>
    //         <td>".$row['nama']."</td>
    //         <td>".$jenis_kelamin."</td>
    //         <td>".$row['jurusan']."</td>
    //           </tr>";
    //     $no++;
    // }
    ?>
</table>
