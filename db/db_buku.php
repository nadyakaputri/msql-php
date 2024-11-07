<?php

$proses=$_GET['proses'];
include"../koneksi.php";

if($proses=='insert'){
    $nobuku=$_POST['nobuku'];
    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $pengarang=$_POST['pengarang'];

    mysqli_query($koneksi, "INSERT INTO buku SET nobuku='$nobuku',judul='$judul',penerbit='$alamat',pengarang='$nohp' ");
}
    header("location:../index.php?title=buku&page=buku");