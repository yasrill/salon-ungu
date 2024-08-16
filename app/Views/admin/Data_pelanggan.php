<?php $this->extend('/layout/templateAdmin') ?>

<?php $this->section('content') ?>



<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Data User Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Table Data User Pelanggan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data User Pelanggan
                                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#tambahUser">
                                                 <i class="fa fa-plus"></i>
                                                </button>
                            </div>
                            <div class="card-body text-center">
                                <table id="datatablesSimple" style="font-size: 16px;">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Nama_pelanggan</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No_Handphone</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       foreach ($layanan as $row) {
                                          echo'
                                             <tr>
                                             <td>'.$row['Nama_pelanggan'].'</td>
                                             <td>'.$row['Email'].'</td>
                                             <td>'.$row['Alamat'].'</td>
                                             <td>'.$row['No_Handphone'].'</td>
                                             <td>'.$row['Password'].'</td>
                                             <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUser">
                                                <i class="fa fa-edit"></i>
                                               </button>
                                               
                                               <button type="button" class="btn" style="background-color: #ed2b2b" > 
                                                <a href="'.base_url('Admin/Data_pelanggan/hapusUser/'.$row['id_pelanggan']).'" class="text-white text-decoration-none"
                                                onClick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')">Hapus</a>
                                                </button>
                                          </td>
                                             </tr>

                                          ';

                                       }
                                    
                                    ?>
                                    </tbody>
                                    </table>

                                <!-- Modal tambah-->
                                <div class="modal fade" id="tambahUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('Admin/Data_pelanggan/tambahDataUserforAdmin')?>" method="post">
                                        <div class="form-group mb-0">
                                            <label>Nama layanan:</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                                        </div>    
                                        <div class="form-group mb-0">
                                            <labe>Email :</labe>
                                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label>Alamat :</label>
                                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label>No Handphone :</label>
                                            <input type="text" name="nomor" class="form-control" placeholder="Masukkan Nomor handphone">
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label>Password :</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                <!-- end modal tambah-->

                                    <!-- Modal tedit-->
                                <div class="modal fade" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('Admin/Data_pelanggan/editDataUserforAdmin')?>" method="post">
                                        <div class="form-group mb-0">
                                            <label for="Nama">Nama :</label>
                                            <input type="text" name="nama" class="form-control" value="<?= $row['Nama_pelanggan'] ?>">
                                        </div>    
                                        <div class="form-group mb-0">
                                            <label for=""></label>
                                            <input type="text" name="email" class="form-control" value="<?= $row['Nama_pelanggan'] ?>>
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label for=""></label>
                                            <input type="text" name="alamat" class="form-control" value="<?= $row['Nama_pelanggan'] ?>>
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label for=""></label>
                                            <input type="text" name="nomor" class="form-control" value="<?= $row['Nama_pelanggan'] ?>>
                                        </div> 
                                        <div class="form-group mb-0">
                                            <label for=""></label>
                                            <input type="password" name="password" class="form-control" value="<?= $row['Nama_pelanggan'] ?>>
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                <!-- end modal edit-->

                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php $this->endSection() ?>