<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images\2022-04-26.png" type="image/gif" sizes="16x16" />
    <title>Booking | Salon Ungu</title>
    <link href="assets/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link
    rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous" />

</head>
<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top">
   <div class="nav-kiri">
       <img src="images\2022-04-26.png" class="logo">
       <a class="navbar-brand" href="index.html">Salon Ungu</a>
 </div>
     <div class="collapse navbar-collapse nav-kanan" id="navbarCollapse">
         <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="index.html" class="nav-item nav-link">Beranda</a>
             <a href="Services.html" class="nav-item nav-link">Daftar Layanan</a>
             <a href="booking.html" class="nav-item nav-link">Booking</a>
             <a href="kontak.html" class="nav-item nav-link">Kontak </a>
             <a href="tentang.html" class="nav-item nav-link">Tentang kami</a>
             <div class="nav-item dropdown">
               <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
               <div class="dropdown-menu m-0">
                   <a href="register.html" class="dropdown-item">Sign Up</a>
                   <a href="login.html" class="dropdown-item">Sign in</a>
                   <a href="admin/login.html" class="dropdown-item">Login Admin</a>
                   <li><hr class="dropdown-divider"></li>
                   <a href="index.html" class="dropdown-item">Log Out</a>
               </div>
           </div>
           <a href="profil.html"><img src="images/user.png" class="icon-nav"/></a>
         </div>
         <!-- <a href="" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a> -->
     </div>
 </nav>
 <!-- Navbar End -->

      


 <div class="container booking">
   <h3 class="fw-bold fs-1">BOOKING SEKARANG !!!</h3>
   <form method="post">

       <div style="padding-top: 30px;">
         <label>Nama :</label>
         <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"></div>

       <div style="padding-top: 30px;">
         <label>Pilih Layanan :</label>
         <select class="form-select" aria-label="Default select example">
            <option selected>List layanan</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
       </div>
       <div style="padding-top: 30px;">
           <label>Tanggal Booking :</label>
           
           <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true"></div>
       <div style="padding-top: 30px;">
           <label>Jam Booking :</label>
           
           <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true"></div>

       <div style="padding-top: 30px;">
         <label>Catatan :</label>
       <textarea class="form-control" id="message" name="message" placeholder="Message" required=""></textarea></div>
       <a href="konfirmasiPembayaran.html">
        <button type="button" class="btn btn-primary" name="submit">Submit</button>
        <!-- type : submit -->
      </a>
   </form>
</div>
</div>
   


      <br>
      <br>
      <br>
      <br>
      <br>

 <!-- FOOTER START -->
 <footer class="footer">
            
   <div class="container">
   <div class="row">
      <div class="col-md-4">
         <h2><strong>Alamat</strong></h2>
         <p>Jl. Abdullah Daeng Sirua No.405 B, Batua, Kec. Manggala, Kota Makassar, Sulawesi Selatan</p>
         <p>Telephone : +6282344033025 <br>
         Email : ayuwulandariungu@gmail.com <br>
         Owner : Ayu Wulandari</p>
         </div>
         <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7129358971297!2d119.46527221454951!3d-5.149829096262829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee36e3c4a8c9b%3A0x86ad9880c35d89a!2sNUANSA%20UNGU%20SALON%20MAKASSAR!5e0!3m2!1sid!2sid!4v1667490784311!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="text-center maps"></iframe>
         </div>
         <div class="col-md-3">
            <h2><strong>Jam Buka</strong></h2>
            <div class="jam">
            Senin             10.00 am	-	9.00 pm <br>
            Selasa            10.00 am	-	9.00 pm <br>
            Rabu    	        10.00 am	-	9.00 pm <br>
            Kamis	            10.00 am	-	9.00 pm <br>  
            Jumat             10.00 am	-	9.00 pm <br>
            Sabtu	            10.00 am	-	9.00 pm <br>
            Minggu	          10.00 am	-	9.00 pm
         </div>
         </div>
   </div> 

   <div class="row">
      <div class="col-12 text-center">
         <div class="copyright mt-5 pt-5">
         <p><small>&copy; 2022 Copyright: Salon Ungu Makassar</small></p>
         </div>
      </div>
   </div> 
   </div>
</footer>
<!-- FOOTER END -->


    
    <script src="assets/bootstrap.bundle.js"></script>
</body>
</html>