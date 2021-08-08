<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <title>Tambah Mahasiswa</title>
</head>

<body>
     <div class="container">
          <h1>Tambah Mahasiswa</h1>
          <p>
               <button type="button" class="btn btn-outline-dark" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>'">
                    Kembali
               </button>
          </p>

          <p>
               <?= form_open('mahasiswa/simpandata') ?>
          <table>
               
               <tr>
                    <td>No :</td>
                    <td>
                         <input type="text" name="no" size="30">
                    </td>
               </tr>
               <tr>
                    <td>Nama :</td>
                    <td>
                         <input type="text" name="nama" size="30">
                    </td>
               </tr>
               <tr>
                    <td>Alamat :</td>
                    <td>
                         <textarea name="alamat" cols="25" rows="5"></textarea>
                    </td>
               </tr>
               <tr>
                    <td>Jenis Kelamin :</td>
                    <td>
                         <input type="radio" name="jenis_kel" value="L">Laki-laki
                         <input type="radio" name="jenis_kel" value="P">Perempuan
                    </td>
               </tr>
               <tr>
                    <td>Hobby :</td>
                    <td>
                         <input type="text" name="hobby" size="30">
                    </td>
               </tr>
               <tr>
                    <td>Agama :</td>
                    <td>
                         <input type="text" name="agama" size="30">
                    </td>
               </tr>
               <tr>
                    <td>Tanggal lahir :</td>
                    <td>
                         <input type="date" name="tgl_lahir" size="30">
                    </td>
               </tr>
               <tr>
                    <td>
                         <input type="submit" class="btn btn-outline-primary" value="simpan data">
                    </td>
               </tr>
               <table>
                    <?php form_close(); ?>
          </p>





     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>