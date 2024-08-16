<?php $this->extend('/layout/templateUserLogin') ?>

<?php $this->section('content') ?>


    <div class="login">
      <form method="POST" action="<?php echo base_url('Login/login_aksi'); ?>" enctype="multipart/form-data">
        <div class="text-center">
          <img
            src="<?php echo base_url('public/images/2022-04-26.png')?>"
            width="100px"
            height="100px"
            alt=""
          />
          <h3 class="font-size-h3 mb-4 mt-4 font-weight-bolder">Sign In</h3>
          <p class="text-dark mb-5">Masukkan Username dan Password Anda</p>
        </div> 

        <label>Username:</label>
        <input
          type="text"
          class="form-control p-2"
          name="uname"
          placeholder="Masukkan Username"
        /><br />

        <label>Password:</label>
        <input
          type="password"
          class="form-control p-2"
          name="password"
          placeholder="Masukkan Password"
        /><br />

        <button type="submit" value="login">Sign In</button>

        <div class="mt-1 text-bawah">
          <span class="text-dark-50">Belum Punya Akun ?</span>
          <a href="<?= base_url('/Login/Register')?> "class="font-weight-bold">Daftar disini!</a>
        </div>

        <div class="text-dark-50 font-weight-bold text-center ungu mb-2">
          © 2022 Salon Ungu Makassar
        </div>
      </form>
    </div>

<?php $this->endSection() ?>

    
    