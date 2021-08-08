<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <title>Tabel Data Mahasiswa</title>
</head>

<body>
     <div class="container">
          <h1>Tabel Data Mahasiswa</h1>
          <p>
               <button type="button" class="btn btn-outline-success" onclick="window.location='<?php echo site_url('mahasiswa/formtambah') ?>'">
                    +Tambah Data
               </button>
          </p>
          <table class="table table-hover">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobby</th>
                    <th>Agama</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
               </tr>
          </thead>

               <tbody>
                    <?php
                    $nomor = 0;
                    foreach ($tampildata as $row) :
                         $nomor++;
                    ?>
     <tr>
               
               <th><?= $nomor; ?></th>
               <td><?= $row->nama ?></td>
               <td><?= $row->alamat ?></td>
               <td><?= $row->jenis_kel ?></td>
               <td><?= $row->hobby ?></td>
               <td><?= $row->agama ?></td>
               <td><?= $row->tgl_lahir ?></td>

          <td>
               <button type="button" class="btn btn-outline-danger" onclick="hapus('<?= $row->no ?>')">
                    hapus
               </button>
               <button type="button" class="btn btn-outline-primary" onclick="window.location='<?php echo site_url('mahasiswa/formedit/' .$row->no) ?>'">
                    Edit
               </button>
          </td>
     </tr>

                    <?php
                    endforeach;
                    ?>
               </tbody>
          </table>
     </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <script>
          function hapus(no) {
               pesan = confirm('Yakin Hapus data mahasiswa');

               if (pesan) {
                    window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + no;
               } else return false;
          }
     </script>
</body>

</html>