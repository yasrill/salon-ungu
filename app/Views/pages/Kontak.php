<?php $this->extend('/layout/template') ?>

<?php $this->section('content') ?>

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
                              <img src="<?php echo base_url('public/images/2022-04-26.png')?>" width="100px" height="100px"/> <br>
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
                      <form action="<?php echo base_url('Kontak/aksi_kontak')?>" method="post" class="contact-form" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="c4N4232x9uJq2avGWdY3reCeNV9zQHcnl2ruBPpC">                    <h3 class="text-center mb-4">Masukkan Pesan Anda Disini</h3>
                          <div class="alert contactus-alert alert-dismissible fade show d-none" role="alert">
                              <span class="message">Email telah terkirim !</span>
                              <button type="button" class="btn-close"></button>
                          </div>
                          <div class="row mt-4 mb-3">
                              <div class="col-6">
                                  <input type="text" name="nama" class="form-control py-2" placeholder="Type your name"
                                      required>
                              </div>
                              <div class="col-6">
                                  <input type="text" name="nomorTelp" class="form-control py-2" placeholder="Phone | Ex. 083XXX">
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col">
                                  <input type="email" name="email" class="form-control py-2" placeholder="E-mail" required>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="form-group col">
                                  <textarea name="pesan" id="message" class="form-control" rows="8"
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


<?php $this->endSection() ?>
