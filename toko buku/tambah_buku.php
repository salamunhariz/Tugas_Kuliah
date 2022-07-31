<html>
<title></title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/778a867dca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="">

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


    <div class="col-md-10 p-5 pt-2">
      <h2>
        <u>
          <a class="font-weight-bold text-black"><i class="fa-solid fa-square-plus mr-2"></i>Tambah Buku</a>
        </u>
      </h2>

      <form role="form" action="insert.php" method="post">
        <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" name="judul_bk" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Penerbit Buku</label>
          <input type="text" name="terbit_bk" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Genre Buku</label>
          <input type="text" name="genre_bk" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Harga Buku</label>
          <input type="text" name="harga_bk" class="form-control" required>
        </div>
        <p><button type="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-square-plus mr-2"></i>Tambah
            Buku</button></p>
        </button>
      </form>
</body>
</head>

</html>