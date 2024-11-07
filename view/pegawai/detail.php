<?php
        include "koneksi.php";
        $idpegawai= $_GET['idpegawai'];
        $query = "SELECT * FROM pegawai  WHERE idpegawai='$idpegawai' ";
        $find_one = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($find_one);

        ?>


      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Data <?= $data['nama'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">


              <div class="form-group">
                  <label for="nama">Nama pegawai</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="username">username </label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" disabled>
              </div>
              
              <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" disabled> <?= $data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $data['nohp'] ?>" disabled>
              </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <a href="index.php?title=pegawai&page=pegawai" class="btn btn-success"><i class="fas fa-undo-alt"></i> Kembali</a>
          </div>

      </div>
      <!-- /.card -->