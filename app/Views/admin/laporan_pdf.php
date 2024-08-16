<table>
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
                <?php foreach ($laporan as $row): ?>
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
