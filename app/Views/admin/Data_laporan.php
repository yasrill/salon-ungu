<?php $this->extend('/layout/templateAdmin') ?>

<?php $this->section('content') ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
                    
        <!-- <h3>!!! Mohon Maaf, Saat ini fitur laporan belum tersedia atau masih dalam proses pengembangan !!!</h3> -->
        <form action="<?= base_url('admin/Data_laporan/generatePDF') ?>" method="POST" class="mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Generate PDF</button>
    </div>
</form>




        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor handphone</th>
                    <th>Alamat</th>
                    <th>Layanan yang dipilih</th>
                    <th>Harga Layanan yang dipilih</th>
                    <th>Booking pada tanggal</th>
                    <th>Booking pada jam</th>
                    <th>Metode Pembayaran yang dipilih</th>
                    <th>Catatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($booking as $row): ?>
                    <?php if ($row['Status_booking'] == 'Terkonfirmasi'): ?>
                <tr>
                    <td><?= $row['Nama_pelanggan']; ?></td>
                    <td><?= $row['Email']; ?></td>
                    <td><?= $row['No_Handphone']; ?></td>
                    <td><?= $row['Alamat']; ?></td>
                    <td><?= $row['Nama_layanan']; ?></td>
                    <td><?= $row['Harga']; ?></td>
                    <td><?= $row['Tanggal_Booking']; ?></td>
                    <td><?= $row['Jam_Booking']; ?></td>
                    <td><?= $row['Metode_pembayaran']; ?></td>
                    <td><?= $row['Catatan']; ?></td>
                    <td><?= $row['Status_booking']; ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php $this->endSection() ?>
