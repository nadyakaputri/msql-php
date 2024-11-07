<!-- Default box -->
<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=pegawai_create&title=pegawai" class="btn btn-success btn-md"><i class="fas fa-user-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                    <?php
                        include "koneksi.php";
                        $query="SELECT idpegawai,nama,username,password,alamat,nohp FROM pegawai order by idpegawai";
                        $hasil=mysqli_query($koneksi,$query);                        
                    ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Nohp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    while($data=mysqli_fetch_assoc($hasil)){
                    echo "<tr>
                        <td>".$no."</td>
                       
                        <td>".$data['nama']."</td>
                        <td>".$data['username']."</td>
                        <td>".$data['alamat']."</td>
                        <td>".$data['nohp']."</td>
                        <td>
                            <a href='index.php?title=pegawai&page=pegawai_detail&idpegawai=$data[idpegawai]' class='btn btn-outline-primary btn-sm'><i class='fas fa-eye'></i> View</a>
                            <a href='index.php?title=pegawai&page=pegawai_edit&idpegawai=$data[idpegawai]' class='btn btn-outline-success btn-sm'><i class='fas fa-edit'></i> Edit</a>
                        </td>
                    </tr>";
                    $no++;
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