<?php $this->extend('/layout/templateAdmin') ?>

<?php $this->section('content') ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Table Data Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Table Data Layanan</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Layanan
                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#tambahLayanan">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" style="font-size: 16px;">
                    <thead>
                        <tr>
                            <th>Nama_layanan</th>
                            <th>Harga</th>
                            <th>Durasi</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($layanan as $row): ?>
                            <tr>
                                <td><?= $row['Nama_layanan']; ?></td>
                                <td><?= $row['Harga']; ?></td>
                                <td><?= $row['Durasi']; ?></td>
                                <td><?= $row['Keterangan']; ?></td>
                                <td>
                                    <button type="button" class="btn text-white" style="background-color: #fcba03" data-bs-toggle="modal" data-bs-target="#editLayanan<?= $row['id_layanan']; ?>">
                                    <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn" style="background-color: #ed2b2b">
                                        <a href="<?= base_url('Admin/Data_layanan/hapusLayanan/'.$row['id_layanan']); ?>" class="text-white text-decoration-none" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal edit -->
                            <div class="modal fade" id="editLayanan<?= $row['id_layanan']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit Layanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('Admin/Data_layanan/editDataLayanan'); ?>" method="post">
                                                <input type="hidden" name="id_layanan" value="<?= $row['id_layanan']; ?>">
                                                <div class="form-group mb-2">
                                                    <label>Nama Layanan :</label>
                                                    <input type="text" name="nama_layanan" class="form-control" placeholder="Masukkan Nama Layanan" value="<?= $row['Nama_layanan']; ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Harga :</label>
                                                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" value="<?= $row['Harga']; ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Durasi :</label>
                                                    <input type="text" name="durasi" class="form-control" placeholder="Masukkan Durasi" value="<?= $row['Durasi']; ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label>Keterangan :</label>
                                                    <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" value="<?= $row['Keterangan']; ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal edit -->
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Modal tambah -->
                <div class="modal fade" id="tambahLayanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Layanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Admin/Data_layanan/tambahDataLayanan'); ?>" method="post">
                                    <div class="form-group mb-2">
                                        <label>Nama Layanan :</label>
                                        <input type="text" name="nama_layanan" class="form-control" placeholder="Masukkan Nama Layanan">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Harga :</label>
                                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Durasi :</label>
                                        <input type="text" name="durasi" class="form-control" placeholder="Masukkan Durasi">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Keterangan :</label>
                                        <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal tambah -->
            </div>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>