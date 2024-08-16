<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>

<div class="container booking">
   <h3 class="fw-bold fs-1">BOOKING SEKARANG !!!</h3>

   <form action="<?php echo base_url('Booking/aksi_booking')?>" method="post" name="form1" enctype="multipart/form-data">
   
                    <!-- <input type="hidden" name="pelangganID" value="">
                    <input type="hidden" name="layananID" value=""> -->

       <div style="padding-top: 30px;">
         <label>Nama : </label>
         <input class="form-control" type="hidden" name="id_pelanggan" value="<?php echo $login_status['id_pelanggan']; ?>">
         <input class="form-control" type="text" name="nama" value="<?php echo $login_status['Nama_pelanggan']; ?>" aria-label="default input example"></div>

       <div style="padding-top: 30px;">
         <label>Pilih Layanan :</label>
         <select class="form-select" aria-label="Default select example" name="id_layanan">
            <option selected>none</option>
            <?php
                          foreach ($layanan as $row) {
                            echo'
                            <option value="'.$row['id_layanan'].'">'.$row['Nama_layanan'].'</option>

                            ';

                          }
                      
                      ?>
          
          </select>
       </div>
       <div style="padding-top: 30px;">
           <label>Tanggal Booking :</label>
           
           <input type="date" class="form-control appointment_date" placeholder="Date" name="tanggal" id='adate' required="true"></div>
       <div style="padding-top: 30px;">
           <label>Jam Booking :</label>
           
           <input type="time" class="form-control appointment_time" placeholder="Time" name="jam" id='atime' required="true"></div>

        <div style="padding-top: 30px;">
         <label>Metode Pembayaran :</label>
         <select class="form-select" aria-label="Default select example" name="pembayaran">
            <option selected>none</option>
            <option>Offline</option>
            <option>Online</option>
          </select>
       </div>

       <div style="padding-top: 30px;">
         <label>Catatan :</label>
       <textarea class="form-control" id="message" name="catatan" placeholder="Message" required=""></textarea></div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   </form>
</div>
</div>
   


      <br>
      <br>
      <br>
      <br>
      <br>

<?php $this->endSection() ?>