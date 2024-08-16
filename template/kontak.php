<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images\2022-04-26.png" type="image/gif" sizes="16x16" />
    <title>Kontak | Salon Ungu</title>
    <link href="assets/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link
    rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/>
    
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
      
        

        <!-- KONTAK START-->
            <div class="kontak-kami">
              <div class="container">
                  <div class="row mt-5 mb-5">
                      <div class="col text-center text-md-left">
                          <div class="overflow-hidden">
                              <h2 class="fw-bold fs-1 mb-3 text-center">KONTAK KAMI</h2>
                              <hr width="300px">
                              <nav>
                                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                                    <li class="breadcrumb-item"><a class="text-black text-decoration-none" href="index.html">BERANDA</a></li>
                                    <li class="breadcrumb-item text-secondary fw-semibold" aria-current="page">KONTAK KAMI</li>
                                </ol>
                            </nav>
                              <p class="fs-5 mt-3">"Adukan kritik, saran, keluhkesah dan masukan kepada kami, kami akan mendengarkannya"</p>
                          </div>
                      </div>
                  </div>
                  <div class="row justify-content-center mb-4 contact-info">
                      <div class="contact-detail">
                          <div class="store-name">
                              <b>SALON UNGU</b>
                          </div>
                          <div class="store-type">
                              <b>SALON RAMBUT</b>
                          </div>
                          <div>
                              <div class="born">
                                  <span>Makassar</span>
                                  <span class="mx-3 opacity-3">|</span>
                                  <span>SEJAK 1997</span>
                              </div>
                          </div>
                          <div class="contact-divider">
                              <hr style="margin: 0 auto; height: 1px; background-color: white;">
                          </div>
                          <div>
                           <div>
                              <img src="images\2022-04-26.png" width="100px" height="100px"/> <br>
                               <b>Our Socmed:</b> <br>
                               Instagram - Salon Ungu<br>
                               Facebook - Salon Ungu Makassar<br>
                               Tiktok - Salon Ungu Slay
                           </div>
                           <div>ayuwulandariungu@gmail.com</div>
                       </div>
                          <div class="contact-divider">
                              <hr style="margin: 0 auto; height: 1px; background-color: white;">
                          </div>
                          <div class="reservation">
                              <span>Reservasi ? <a href="#">Booking Sekarang</a></span>
                              <span class="phone">+6282344033025</span>
                          </div>
                      </div>
                      <form action="#" method="post" class="contact-form">
                          <input type="hidden" name="_token" value="c4N4232x9uJq2avGWdY3reCeNV9zQHcnl2ruBPpC">                    <h3 class="text-center mb-4">Masukkan Pesan Anda Disini</h3>
                          <div class="alert contactus-alert alert-dismissible fade show d-none" role="alert">
                              <span class="message">Email telah terkirim !</span>
                              <button type="button" class="btn-close"></button>
                          </div>
                          <div class="row mt-4 mb-3">
                              <div class="col-6">
                                  <input type="text" name="name" class="form-control py-2" placeholder="Type your name"
                                      required>
                              </div>
                              <div class="col-6">
                                  <input type="text" name="phone" class="form-control py-2" placeholder="Phone | Ex. 083XXX">
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col">
                                  <input type="email" name="email" class="form-control py-2" placeholder="E-mail" required>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="form-group col">
                                  <textarea name="message" id="message" class="form-control" rows="8"
                                      placeholder="Type your message here ..." required></textarea>
                              </div>
                          </div>
                          <div class="mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary">
                                  <span>Send</span>
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <!-- KONTAK END -->





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