<?php $this->extend('/layout/templateAdmin') ?>

<?php $this->section('content') ?>


        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Menu Admin</li>
            </ol>
            <!-- <div class="row">
              <div class="col-xl-6 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body fs-4 text-center">Kontak Masuk</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-center"
                  >
                    <h2>1</h2>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body fs-4 text-center">Data User Pelanggan</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-center"
                  >
                    <h2>1</h2>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body fs-4 text-center">Data Booking</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-center"
                  >
                    <h2>1</h2>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body fs-4 text-center">
                    Laporan Penghasilan
                  </div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-center"
                  >
                    <h2>1</h2>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Kontak Masuk
              </div>
              <div class="card-body">
                <table id="datatablesSimple" style="font-size: 16px;">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No_Telpon</th>
                      <th>Pesan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                          foreach ($layanan as $row) {
                            echo'
                              <tr>
                              <td>'.$row['Nama'].'</td>
                              <td>'.$row['No_Telpon'].'</td>
                              <td>'.$row['Email'].'</td>
                              <td>'.$row['Pesan'].'</td>
                              <td>
                                  
                                  <button type="button" class="btn" style="background-color: #ed2b2b" > 
                                  <a href="'.base_url('Admin/Dashboard/hapusKontak/'.$row['id_kontak']).'" class="text-white text-decoration-none"
                                  onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')">Hapus</a>
                                  </button>
                              </td>
                              </tr>

                            ';

                          }
                      
                      ?>
                      <!-- <a href="act-hapus.php?id_mhs='.$row['id_mhs'].'&foto='.$row['foto'].'" class="aksi"> -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        
<?php $this->endSection() ?>