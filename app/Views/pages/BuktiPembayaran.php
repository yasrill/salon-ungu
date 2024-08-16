<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>

<div class="container konfirm">
  <!-- breadcrumbs //-->
  <section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec">
      <div class="container">
        <div>
          <div class="cont-details">
            <div class="table-content table-responsive cart-table-content m-t-30">
              <h1 class="fw-bold">Bayar Sekarang !!</h1>
              <div class="fw-bold">
                <h4>Jenis Pembayaran yang berlaku :</h4>
                <p>Gopay : 088245715939</p>
                <p>Shopee Pay : 088245715939</p>
                <p>Dana : 088245715939</p>
                <p>Ovo : 088245715939</p>
                <p>BRI : 7632-01-007520-53-0</p>
                <p>BNI : 5942-21-117420-52-1</p>
              </div>
              <!-- Di dalam body atau tempat yang sesuai -->
              <p>Waktu tersisa: <span id="countdown"></span></p>

              <!-- <?php if (session()->has('status')) : ?>
                <div class="alert alert-success">
                  <?= session('status') ?>
                </div>
              <?php endif; ?> -->

              <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger">
                  <?= session('error') ?>
                </div>
              <?php endif; ?>

              <form action="<?= base_url('Booking/buktiBayarOnline') ?>?id_booking=<?= $booking[0]['id_booking']; ?>" method="POST" enctype="multipart/form-data">
                <h3>Form Pengiriman Bukti Pembayaran</h3>
                <div >
                  <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran:</label>
                  <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" required>
                </div>
                <div>
                <button type="submit" class="btn btn-primary mt-2">kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<br />
<br />
<br />
<br />
<br />

<!-- Di dalam tag <head> atau sebelum penutup tag <body> -->
<script>
  // Mendapatkan elemen dengan ID "countdown"
  var countdownElement = document.getElementById("countdown");

  // Waktu awal dalam detik (20 menit = 1200 detik)
  var timeLeft = 1200;

  // Fungsi untuk mengupdate waktu mundur setiap detik
  function updateCountdown() {
    // Menghitung menit dan detik
    var minutes = Math.floor(timeLeft / 60);
    var seconds = timeLeft % 60;

    // Menampilkan waktu mundur pada elemen countdown
    countdownElement.innerHTML = minutes + " menit " + seconds + " detik";

    // Mengurangi waktu mundur dengan 1 detik
    timeLeft--;

    // Memeriksa apakah waktu mundur sudah habis
    if (timeLeft < 0) {
      // Lakukan tindakan yang sesuai ketika waktu habis
      countdownElement.innerHTML = "Waktu habis!";
    } else {
      // Memanggil fungsi updateCountdown setiap detik
      setTimeout(updateCountdown, 1000);
    }
  }

  // Memanggil fungsi updateCountdown untuk memulai countdown
  updateCountdown();
</script>

<?php $this->endSection() ?>
