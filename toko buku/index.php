<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/778a867dca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="">
  <title>toko buku</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">Selamat Datang Di | Toko Buku Berbasis Web </a>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
      <h5>
        <i class="fa-solid fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
        <i class="fa-solid fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        <i class="fa-solid fa-right-from-bracket mr-3" data-toggle="tooltip" title="Sign Out"></i>
      </h5>
    </div>
    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php" i class="fa-solid fa-gauge-high mr-2"><i class="fa-solid fa-gauge-high mr-2"></i>
            Dashboard</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah_buku.php"><i class="fa-solid fa-square-plus mr-2"></i> Tambah
            Buku</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fa-solid fa-book mr-2"></i> Daftar Buku</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-person mr-2"></i> Pengguna</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-calendar-days mr-2"></i> Kalender</a>
          <hr class="bg-primary">
      </ul>
    </div>


    <div class="mx-auto">
      <div class="col-md-10 p-5 pt-2">
        <center>
          <h2>
            <u>
              <a class="font-weight-bold text-black"><i class="fa-solid fa-book mr-2"></i>DAFTAR BUKU</a>
            </u>
          </h2>
        </center>
        <table class="table table-striped table-hover dtabel">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Penerbit Buku</th>
              <th>Genre Buku</th>
              <th>Harga Buku</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>


      </div>
    </div>
  </div>
  <?php
  //tambahkan dbconnect
  include('dbconnect.php');

  //query
  $query = "SELECT * FROM id_buku";

  $result = mysqli_query($conn, $query);

  ?>

  <?php
  $no = 1;
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $row['judul']; ?></td>
      <td><?php echo $row['penerbit']; ?></td>
      <td><?php echo $row['genre']; ?></td>
      <td><?php echo $row['harga']; ?></td>
      <td><a href="editform.php?id=<?php echo $row['id_buku']; ?>" class="btn btn-success" role="button">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-danger" role="button">Delete</a></td>

    </tr>

  <?php
  }
  mysqli_close($conn);
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
</body>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<Script type="text/javascript" src="admin.css"></Script>
<script>
  $(document).ready(function() {
    $('.dtabel').DataTable();
  });
</script>

</body>

</html>