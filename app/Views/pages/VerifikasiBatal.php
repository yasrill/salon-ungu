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
              <h1 class="fw-bold">Verifikasi Pembatalan !!</h1>

              <h5>Tulis Alasan anda melakukan pembatalan dibawah ini 😊</h5>
              <form action="<?= base_url('Booking/verifikasiBatal') ?>?id_booking=<?= $booking[0]['id_booking']; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
               <label for="comment">Tulis Alasan:</label>
               <textarea class="form-control" rows="5" id="comment" name="alasan_batal"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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

<?php $this->endSection() ?>
