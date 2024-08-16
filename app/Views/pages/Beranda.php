<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>

      <!-- Banner -->
      <div class="container-fluid banner">
          <div class="container text-center">
              <div class="square"></div>
              <h4 class="display-6">Nuansa Salon Ungu</h4>
              <h3 class="display-2"><strong>Salon Kecantikan Terbaik di Makassar</strong></h3>
              <a href="<?php echo base_url('/Booking/booking')?>">
                  <button type="button" class="btn btn-lg tombol">Book Sekarang</button>
              </a>
          </div>
      </div>
      <!-- banner end -->

      <!-- Welcome -->
      <div class="container-fluid pt-3 pb-4 bg-light welcome">
          <div class="container text-center">
            <h3 class="display-7" id="welcome" style="color: #000;"><strong>SELAMAT DATANG DI SALON UNGU</strong></h3>
            <h5 class="display-7" id="welcome" style="color: #000;">Anda Sopan Kami Segan</h5>
            <hr>
            <p>Seiring dengan gaya hidup yang modern kami hadir untuk memberikan pelayanan hair treatment khusus wanita dan pria di kota Makassar. Dengan theraphyst yang profesional dan terpecaya dengan berbagai macam jenis perawatan yang terbaik.</p>
          </div>
      </div>
      <!-- welcome -->

      <!-- Main Page -->
       <!-- Image Showcases-->
       <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url("public/images/pexels-cottonbro-3993123.jpg"); ?>)"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h1 class="fw-bold">PELAYANAN YANG TOTALITAS</h1>
                    <p class="lead mb-0">Seiring dengan gaya hidup yang modern kami hadir untuk memberikan pelayanan hair treatment khusus wanita dan pria di kota Makassar. Dengan theraphyst yang profesional dan terpecaya dengan berbagai macam jenis perawatan yang terbaik.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php echo base_url("public/images/pexels-rodnae-productions-7755456.jpg"); ?>)"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h1 class="fw-bold">HAIRSTYLIST YANG PROFESSIONAL</h1>
                    <p class="lead mb-0">Kalian tidak perlu khawatir mengenai tidak sesuainya ekspektasi kalian setelah diberikan service di salon ini, Karena Hairstylist yang akan menangani kalian adalah Hairstylist yang sudah berpengalaman di bidangnya</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo base_url("public/images/pexels-cottonbro-7440063.jpg"); ?>)"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h1 class="fw-bold">HARGA YANG TERJANGKAU DENGAN KUALITAS TINGGI</h1>
                    <p class="lead mb-0">Harga terjangkau dengan Service Premium dapat kami berikan di salon kami. Ini karena kami ingin orang-orang yang jarang ke salon dapat secara rutin mengunjungi salon untuk menguprade diri mereka</p>
                </div>
            </div>
        </div>
    </section>
     
      <!-- main page end -->

      
    <!-- Service Start -->
    <div class="container-xxl py-5 service">
      <div class="container">
              <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <p class="d-inline-block bg-dark text-white py-2 px-4">LAYANAN</p>
              <h1 class="text-uppercase fw-bold">KAMI MENYEDIAKAN</h1>
              <hr>
          </div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6">
                  <div class="service-item position-relative overflow-hidden bg-dark d-flex h-100 p-5 ps-0">
                      <div class="ps-4">
                          <h3 class="text-uppercase mb-3 text-center text-white fw-bold">Haircut</h3>
                          <p class="text-white text-center">Model rambut yang trendi memang kerap datang dan pergi setiap tahunnya. Namun, memilih model rambut sebetulnya tak selalu karena sedang tren, melainkan cocok dengan kepribadian dan bentuk wajah kita.</p>
                          <p class="text-white harga mt-4">START FROM Rp30.000</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item position-relative overflow-hidden bg-dark d-flex h-100 p-5 ps-0">
                      <div class="ps-4">
                          <h3 class="text-uppercase mb-3 text-center text-white fw-bold">Hair Care</h3>
                          <p class="text-white text-center">Model rambut yang trendi memang kerap datang dan pergi setiap tahunnya. Namun, memilih model rambut sebetulnya tak selalu karena sedang tren, melainkan cocok dengan kepribadian dan bentuk wajah kita.</p>
                          <p class="text-white harga mt-4">START FROM Rp40.000</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item position-relative overflow-hidden bg-dark d-flex h-100 p-5 ps-0">
                      <div class="ps-4">
                          <h3 class="text-uppercase mb-3 text-center text-white fw-bold">Beauty Care</h3>
                          <p class="text-white text-center">Model rambut yang trendi memang kerap datang dan pergi setiap tahunnya. Namun, memilih model rambut sebetulnya tak selalu karena sedang tren, melainkan cocok dengan kepribadian dan bentuk wajah kita.</p>
                          <p class="text-white harga mt-4">START FROM Rp50.000</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->



        <!-- galeri start -->
        <div class="container-fluid pt-5 pb-2 mt-5 galeri mt-5">
          <div class="container text-center col-8">
            <h3 class="d-inline-block bg-dark text-white py-3 px-4">GALERI SALON UNGU</h3> <hr>
            <img src="<?php echo base_url('public/images/71879654_155445139053887_2923695457117615455_n.jpg')?>">
            <img src="<?php echo base_url('public/images/72279637_1116467595226908_8811186266186307529_n.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/81404244_207591446936809_8926147150759220804_n.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/101060401_2790408477752693_6441156676210391647_n.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/311702275_132593642889018_7909866990690980166_n.webp')?>" alt="">
            <img src="<?php echo base_url('public/images/106113327_822559428275312_763704457691560075_n.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/282033137_394983049179824_8031823537834193213_n.webp')?>" alt="">
            <img src="<?php echo base_url('public/images/101024144_157320515829961_6149643027944650967_n.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/image2.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/image3.jpeg')?>" alt="">
            <img src="<?php echo base_url('public/images/image1.jpg')?>" alt="">
            <img src="<?php echo base_url('public/images/image4.jpg')?>" alt="">
            <br>
            <br>
            <br>
          </div>
        </div>
        <!-- galeri end -->



        <!-- testimoni start -->
        <div class="container-xxl py-5">
          <div class="container w-75 test testimoni">
              <div class="text-center mx-auto mb-5">
                <p class="d-inline-block bg-dark text-white py-2 px-4">TESTIMONI</p>
                  <h1 class="text-uppercase fw-bold">Pendapat costumer kami</h1>
                  <hr>
              </div>
              <div class="row bungkus-test">
                  <div class="col-5 bg-dark text-white px-5 py-5 ">
                      <h4 class="">Rue <span class="text-primary">@RueX123</span></h4>
                      <span class="fs-6">"Peralatan yang sangat memadai, pelayanan cepat dan murah meriah"</span>
                  </div>
                  <div class="col-5 bg-dark text-white px-5 py-5">
                    <h4 class="">Jules <span class="text-primary">@July23</span></h4>
                    <span class="fs-6">"Sangat ramah, Bintang 5. gak sabar pengen datang kesini lagi, soalnya nyaman"</span>
                </div>
                <div class="col-5 bg-dark text-white px-5 py-5 ">
                    <h4 class="">Alexandra <span class="text-primary">@alexandra123</span></h4>
                    <span class="fs-6">"Pelayanan sangat memuaskan, fix sih ini jadi langganan"</span>
                </div>
                <div class="col-5 bg-dark text-white px-5 py-5 ">
                  <h4 class="">Maxine <span class="text-primary">@MAxxine</span></h4>
                  <span class="fs-6">"Tingall duduk, pas pulang langsung cantik. semoga rejekinya dilancarkan"</span>
              </div>
                  </div>
              </div>      
          </div>
       <!-- Testimonial End -->
     
      </div> 
        
        <br>
        <br>

        
<?php $this->endSection() ?>
