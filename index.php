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
        <div class="logo""><a href=" https://aac.unair.ac.id/"> <img src="asset/logo_aac.png"></a></div>

    </div>
    <div class="container">

        <h1 style="text-align: center;"class="mt-2">Sertifikat Siswa</h1>
        <form method="GET" action="index.php" class="input-form" style="text-align:center ;">
            <label for="" class="label"> Pencarian : </label>
            <input type="text" class="form-control" name="cari" autocomplete="off">
            <button type="submit" class="btn btn-success mb-3 mt-2">Search</button>
        </form>
        <?php 
        include "konektor.php"; 
        if(isset($_GET['cari'])){
            $pencarian = $_GET['cari'];
            if(empty($pencarian)) {
                header('location: index.php');
                exit;
           }
            $query ="SELECT * FROM sertif_siswa WHERE No_Induk like '%".$pencarian."%'";
             ?>       
        <table class="table table-striped" style="text-align: center;">
            <tr>
                <th>No. Induk</th>
                <th>Nama</th>
                <th>Link Sertifikat</th>
            </tr>
            <tr>
                <?php         
                $tampil = mysqli_query($koneksi,$query);
                // $tampil = mysqli_query($koneksi,"SELECT * FROM sertif_mahasiswa");
                while($data = mysqli_fetch_array($tampil)){
            ?>
                <td><?php echo $data ['No_Induk']; ?></td>
                <td><?php echo $data ['nama']; ?></td>
                <td><a href="<?php echo $data ['Link_Sertif']; ?>"><?php echo $data ['Link_Sertif']; ?></a></td>
            </tr>
            <?php }?>
        </table>
        <?php
        }
        else{
            echo"<h1 style='text-align:center;' class ='mt-3'>Silahkan menginputkan No.Induk siswa </h1>";     
        }
         ?>

    </div>

</body>

</html>