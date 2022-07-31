<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_toko_buku";
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("error in connection");
}

//echo "database connected"
