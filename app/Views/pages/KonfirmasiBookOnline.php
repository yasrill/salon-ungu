<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>


<div class="container konfirm">
      <!-- breadcrumbs //-->
      <section class="w3l-contact-info-main" id="contact">
        <div class="contact-sec">
          <div class="container">
            <div>
              <div class="cont-details">
                <div
                  class="table-content table-responsive cart-table-content m-t-30"
                >
                  <h1 class="fw-bold">KONFIRMASI BOOKING!!</h1>
                  <table class="table table-bordered">
                    <tr>
                      <th>Nama</th>
                      <td><?= $booking[0]['Nama_pelanggan']; ?></td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?= $booking[0]['Email']; ?></td>
                    </tr>
                    <tr>
                      <th>Nomor handphone</th>
                      <td><?= $booking[0]['No_Handphone']; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td><?= $booking[0]['Alamat']; ?></td>
                    </tr>

                    <tr>
                      <th>Layanan yang dipilih</th>
                      <td><?= $booking[0]['Nama_layanan']; ?></td>
                    </tr>

                    <tr>
                      <th>Harga Layanan yang dipilih</th>
                      <td><?= $booking[0]['Harga']; ?></td>
                    </tr>

                    <tr>
                      <th>Booking pada tanggal</th>
                      <td><?= $booking[0]['Tanggal_Booking']; ?></td>
                    </tr>
                    <tr>
                      <th>Booking pada jam</th>
                      <td><?= $booking[0]['Jam_Booking']; ?></td>
                    </tr>
                    <tr>
                      <th>Metode Pembayaran yang dipilih</th>
                      <td><?= $booking[0]['Metode_pembayaran']; ?></td>
                    </tr>
                    <tr>
                      <th>Catatan</th>
                      <td><?= $booking[0]['Catatan']; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>

      <a href="<?php echo base_url('Booking/terkonfirmasiOnline')?>?id_booking=<?= $booking[0]['id_booking']; ?>" type="button" class="btn btn-primary biru mt-2">
        Konfirmasi
      </a>
      <a href="<?php echo base_url('Booking/dibatalkan')?>?id_booking=<?= $booking[0]['id_booking']; ?>" type="button" class="btn btn-danger merah mt-2" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan?');">
      Batalkan</a>
      <a href="<?php echo base_url('Booking/printpdfBookOn')?>?id_booking=<?= $booking[0]['id_booking']; ?>" type="button" class="btn btn-secondary mt-2">
      Print PDF</a>

      <br>
      <br>
      <p>
        *Tekan Konfirmasi Jika anda Telah yakin bahwa Reservasi yang anda lakukan telah benar dan sesuai dengan yang diinginkan.
      </p>
      <p>*Tekan Batalkan Jika anda Merasa anda kesalahan ketika pada reservasi yang telah anda lakukan atau jika anda ingin menunda janji temu.</p>
      <br>
      <h3 class="fw-bold">Informasi Terkait Booking Yang Anda Lakukan</h3>
     <p>Anda Melakukan Booking atau reservasi dengan pembayaran Online yang mana pembayaran tersebut dilakukan lengsung setelah melakukan konfirmasi booking dengan cara transfer e-money..</p> 
    <p>Datanglah ke lokasi sesuai hari, jam dan tanggal sesuai dengan yang telah anda sepakati pada saat melakukan reservasi.</p>
    <p>Disarankan datang lebih cepat dari jam yang telah ditentukan, untuk masalah keterlambatan masih bisa kami maklumi asalkan anda tetap datang dan tidak membuat janji palsu</p>
    <h3 class="fw-bold">FAQ</h3>
    <p>Q : Bagaimana Jika Terlanjur Melalukan konfirmasi Booking, trus beberapa hari setelahnya tiba tiba ada urusan mendadak dan ingin melakukan pembatalan ?</p>
    <p>A : Untuk Masalah pembatalan ketika anda telah terlanjur melkukan konfirmasi, anda bisa membatalkannya dengan cara menghubungi kami melalui instagram atau Menghubungi CS kami pada menu kontak kami atau WA kami pada nomor ini "0888276358976".</p>
    <p>Q : Bagaimana Jika saya ingin memesan layanan lebih dari satu ?</p>
    <p>A : Untuk Memesan layanan lebih dari satu, anda dapat mengajukannya ketika anda telah datang pada lokasi pada hari janji temu yang telah anda tentukan.</p>
    
    </div>
  
    <br />
    <br />
    <br />
    <br />
    <br />


<?php $this->endSection() ?>