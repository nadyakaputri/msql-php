<!-- Default box -->
<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=buku_create&title=buku" class="btn btn-success btn-md ">
                        <i class="fas fa-user-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Buku</th>
                    <th>judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "koneksi.php";
                    $nobuku=1;
                    $sql=mysqli_query($koneksi,"SELECT * FROM buku");
                    while($data=mysqli_fetch_array($sql)){
                        echo "
                        <tr>
                        <td>$nobuku</td>
                        <td>$data[judul]</td>
                        <td>$data[pengarang]</td>
                        <td>$data[penerbit]</td>
                        <td><div class='btn-group'>
                        <a href='#' class='btn btn-sm btn success'
                        title='ubah'><i class='fa fa-pencil-alt'></i></a>
                        <a href='#' class='btn btn-sm btn-danger'
                        title='hapus'><i class='fa fa-trash-alt'></i></a>
                        </div></td>
                        </tr>";
                        $nobuku++;
                    }
                  ?>
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>
      <!-- /.card -->
