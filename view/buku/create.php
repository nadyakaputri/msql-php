<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>

</head>
<body>
    <style>
        .reset-icon {
    font-size: 1.2em; 
    vertical-align: middle;
    position: relative;
    top: -2px;
}
</style>
<div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Tambah Data Buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="db/db_buku.php?proses=insert" method="post">
          <div class="card-body">

              <div class="form-group">
                  <label for="nobuku">No Buku</label>
                  <input type="text" class="form-control" id="nobuku" name="nobuku" placeholder="Masukkan nobuku">
              </div>
              <div class="form-group">
                  <label for="judul">judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul">
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan pengarang">
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <textarea class="form-control" rows="3" id="penerbit" name="penerbit" placeholder="Masukkan penerbit"></textarea>
              </div>
           

          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
              <button type="submit" class="btn btn-warning"><i class="fas fa-retweet"></i> Reset</button>
          </div>
          </form>
      </div>