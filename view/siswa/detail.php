<?php
      include "koneksi.php";
      $nisn=$_GET['nisn'];
      $query="SELECT * FROM siswa WHERE nisn='$nisn'";
      $find_one=mysqli_query($koneksi,$query);
      $data=mysqli_fetch_assoc($find_one);
      
?>
      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Data <?=$data['nama'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">

              <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?=$data['nama'] ?>">
              </div>
              <div class="form-group">
                  <label for="nisn">nisn</label>
                  <input type="text" class="form-control" id="nisn" name="nisn" value="<?=$data['nisn'] ?>">
              </div>
              <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" > <?=$data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" value="<?=$data['nohp'] ?>">
              </div>
           

          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">

          </div>

      </div>
      <!-- /.card -->