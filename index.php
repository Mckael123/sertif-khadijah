<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <link rel="shortcut icon" href="asset/logo_aac.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="header">
        <div class="logo""><a href="https://aac.unair.ac.id/"><img src="asset/logo_aac.png"></a></div>
    
    </div>
    <div class="container">

        <h1 style="text-align: center;">Sertifikat Siswa</h1>
        <form method="GET" action="index.php" class="input-form" style="text-align:center ;">
            <label for="" class="label"> Pencarian : </label>
            <input type="text" class="form-control" name="cari"
                value="<?php if (isset($_GET['cari'])){echo $_GET['cari'];} ?>">
            <button type="submit" class="btn btn-success mb-3 mt-2">Search</button>
        </form>
        <table class="table table-striped">
            <tr>
                <th>No. induk</th>
                <th>Nama</th>
                <th>Link Sertifikat</th>
            </tr>
            <tr>

                <?php
                include "konektor.php"; 
                if(isset($_GET['cari'])){
                    $pencarian = $_GET['cari'];
                    $query = "SELECT * FROM sertif_siswa WHERE No_Induk like '%".$pencarian."%' ";
                }
                else{
                    $query = "SELECT * FROM sertif_siswa";
                }
                $tampil = mysqli_query($koneksi,$query);
                // $tampil = mysqli_query($koneksi,"SELECT * FROM sertif_mahasiswa");
                while($data = mysqli_fetch_array($tampil)){
            ?>
                <td><?php echo $data ['No_Induk']; ?></td>
                <td><?php echo $data ['nama']; ?></td>
                <td><?php echo $data ['Link_Sertif']; ?></td>
            </tr>
            <?php }?>
        </table>
    </div>



</body>

</html>