<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Input Data Biodata</title>
  </head>

  <body>

    <div class="container" style="margin-top:50px">
    <div class="container" style="margin-left:auto">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
              <H4><strong> DAFTAR BIODATA </strong></H4>
            </div>
            <div class="card-body">
              <a href="tambah-data.php" class="btn btn-md btn-success" style="margin-bottom: 20px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">KOTA LAHIR</th>
                    <th scope="col">TGL. LAHIR</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $id = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_biodata");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $id++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['tempat_lahir'] ?></td>
                      <td><?php echo $row['tgl_lahir'] ?></td>
                      <td><?php echo $row['agama'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      
                        <td class="text-left">
                        <a href="edit-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>