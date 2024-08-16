<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>

 <!-- bagian menu -->
 <div class="container">
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <div class="container-fluid">
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="collapsibleNavbar">
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="index.html">Beranda</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="berita.html">Berita</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="tentang.html">Tentang</a>
               </li> 
               <li class="nav-item">
                 <a class="nav-link" href="kontak.html">Kontak</a>
               </li>  
             </ul>
           </div>
         </div>
       </nav>
     </div>
     
     <!-- bagian konten -->
     <div class="container mt-3">
         <div class="row">
             <div class="col-sm-12">
               <div class="row mt-5 mb-5">
                  <div class="col text-center text-md-left">
                      <div class="overflow-hidden">
                          <h2 class="fw-bold fs-1 mb-3 text-center">DAFTAR LAYANAN</h2>
                          <hr width="300px" class="garis">
                          <nav>
                            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                                <li class="breadcrumb-item"><a class="text-black text-decoration-none" href="index.html">BERANDA</a></li>
                                <li class="breadcrumb-item text-secondary fw-semibold" aria-current="page">DAFTAR LAYANAN</li>
                            </ol>
                        </nav>
                          <p class="fs-5 mt-3">"Silahkan pilih layanan yang anda inginkan, kualitas terjamin mazzeh"</p>
                      </div>
                  </div>
              </div>
                 <table class="table table-hover">
                     <thead class="bg-color bg-dark text-white">
                       <tr>
                         <th>#</th>
                         <th>Nama</th>
                         <th>Harga</th>
                         <th>Durasi</th>
                         <th>Keterangan</th>
                       </tr>
                     </thead>
                     <tbody>
                      <?php
                          foreach ($layanan as $row) {
                            echo'
                              <tr>
                              <td><b>'.$row['id_layanan'].'</b></td>
                              <td>'.$row['Nama_layanan'].'</td>
                              <td>'.$row['Harga'].'</td>
                              <td>'.$row['Durasi'].'</td>
                              <td>'.$row['Keterangan'].'</td>
                              </tr>

                            ';

                          }
                      
                      ?>
                       
                     </tbody>
                   </table>
             </div>
         </div>
     </div>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

<?php $this->endSection() ?>