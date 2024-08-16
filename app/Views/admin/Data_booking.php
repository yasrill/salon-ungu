<?php $this->extend('/layout/templateAdmin') ?>

<?php $this->section('content') ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Table Data Booking</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Table Data Booking</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Booking
                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#tambahBooking">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" style="font-size: 16px;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Layanan</th>
                            <th>Tanggal_Booking</th>
                            <th>Jam_Booking</th>
                            <th>Catatan</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran Online</th>
                            <th>Alasan Pembatalan Booking</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($layanan as $row) { ?>
                        <tr>
                            <td><?= $row['Nama'] ?></td>
                            <td><?= $row['id_layanan'] ?></td>
                            <td><?= $row['Tanggal_Booking'] ?></td>
                            <td><?= $row['Jam_Booking'] ?></td>
                            <td><?= $row['Catatan'] ?></td>
                            <td><?= $row['Status_booking'] ?></td>
                            <td>
                                <img src="<?= base_url('public/buktibayar/' . $row['Bukti_bayar']) ?>" alt="Tidak Membutuhkan foto" width="100">
                            </td>
                            <td><?= $row['Alasan_batal'] ?></td>
                            <td>
                                <button type="button" class="btn text-white" style="background-color: #fcba03" data-bs-toggle="modal" data-bs-target="#editBooking<?= $row['id_booking']; ?>">Edit</button>
                                <button type="button" class="btn" style="background-color: #ed2b2b">
                                    <a href="<?= base_url('Admin/Data_booking/hapusBooking/'.$row['id_booking']) ?>" class="text-white text-decoration-none" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>

                <!-- Modal tambah -->
                <div class="modal fade" id="tambahBooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Booking</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('Admin/Data_booking/tambahBookAdmin') ?>" method="post">
                                    <div class="form-group mb-2">
                                        <label>Nama :</label>
                                        <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Layanan :</label>
                                        <input type="text" name="layanan" class="form-control" placeholder="Masukkan layanan">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Tanggal Booking:</label>
                                        <input type="text" name="tanggal" class="form-control" placeholder="Masukkan tanggal">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Jam Booking :</label>
                                        <input type="text" name="jam" class="form-control" placeholder="Masukkan jam">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Catatan :</label>
                                        <input type="text" name="catatan" class="form-control" placeholder="Masukkan Catatan">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Status :</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected>none</option>
                                            <option selected>Terkonfirmasi</option>
                                            <option selected>Dibatalkan</option>
                                        </select>
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

                <!-- Modal edit -->
                <?php foreach ($layanan as $row) { ?>
                    <div class="modal fade" id="editBooking<?= $row['id_booking']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Edit Booking</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('Admin/Data_booking/editDataBookingforAdmin'); ?>" method="post">
                                        <input type="hidden" name="id_booking" value="<?= $row['id_booking']; ?>">
                                        <div class="form-group mb-2">
                                            <label>Nama :</label>
                                            <input type="text" name="nama_user" class="form-control" value="<?= $row['Nama']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Layanan :</label>
                                            <input type="text" name="layanan" class="form-control" value="<?= $row['id_layanan']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Tanggal Booking:</label>
                                            <input type="text" name="tanggal" class="form-control" value="<?= $row['Tanggal_Booking']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Jam Booking :</label>
                                            <input type="text" name="jam" class="form-control" value="<?= $row['Jam_Booking']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Catatan :</label>
                                            <input type="text" name="catatan" class="form-control" value="<?= $row['Catatan']; ?>">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Status :</label>
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                <option <?= ($row['Status_booking'] == 'none') ? 'selected' : ''; ?>>none</option>
                                                <option <?= ($row['Status_booking'] == 'Terkonfirmasi') ? 'selected' : ''; ?>>Terkonfirmasi</option>
                                                <option <?= ($row['Status_booking'] == 'Dibatalkan') ? 'selected' : ''; ?>>Dibatalkan</option>
                                            </select>
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
                <?php } ?>
                <!-- end modal edit -->
            </div>
        </div>

        <table class="table table-hover width w-25">
            <thead class="bg-color bg-dark text-white">
                <tr>
                    <th>id_layanan</th>
                    <th>Nama_Layanan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $row) { ?>
                    <tr>
                        <td><b><?= $row['id_layanan'] ?></b></td>
                        <td><?= $row['Nama_layanan'] ?></td>
                        <td><?= $row['Harga'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editButtons = document.querySelectorAll('.btn.text-white[style="background-color: #fcba03"]');

        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Tambahkan kode yang ingin Anda jalankan saat tombol "Edit" diklik
                // Misalnya, tampilkan modal edit
                // Anda dapat menggunakan JavaScript atau library modal seperti Bootstrap
            });
        });
    });
</script>

<?php $this->endSection() ?>
