<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="images\2022-04-26.png" type="image/gif" sizes="16x16" />
   <title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/style.css')?>">
   <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <link href="<?php echo base_url('public/assets/bootstrap.css')?>" rel="stylesheet">



</head>
<body>
   
   <div class="register">
     <form action="<?php echo base_url('Login/aksi_register')?>" method="post">
      <div class="text-center">
         <img src="<?php echo base_url('public/images/2022-04-26.png')?>" width="100px" height="100px" class="mt-2"/>
         <h3 class="font-size-h3 mb-3 mt-3 font-weight-bolder">Sign Up</h3>
         <p class="text-dark mb-5">Masukkan detail Anda untuk membuat akun Anda</p>
     </div>

         <label>Email:</label>
            <input type="text" 
                   name="email" 
                   placeholder="Masukkan Email anda"><br>

         <label>Password:</label>
         <input type="password" 
                name="password" 
                placeholder="Masukkan Password"><br>

            <!-- <label>Konfirmasi Password:</label>
            <input type="password" 
                   name="repassword" 
                   placeholder="Ulangi Password"><br> -->

         <label>Nama Lengkap:</label>
            <input type="text" 
                   name="nama" 
                   placeholder="Masukkan Nama anda"><br>
         
         <label>Alamat:</label>
            <textarea type="text" 
                   name="alamat" 
                   placeholder="Masukkan Alamat anda"></textarea><br>

         <label>Nomor Handphone:</label>
            <input type="text" 
                   name="nomor" 
                   placeholder="Masukkan Nomor Telepon anda"><br>

                           

     	<button type="submit" name="register">Submit</button>
      
        <div class="mt-1 ngelink">
         <span class="text-dark-50">Sudah Punya Akun ?</span>
         <a href="<?= base_url('/Login/Login')?>"class="font-weight-bold">Login disini!</a>
     </div>

        <div class="text-dark-50 font-weight-bold text-center ungu">© 2022 Salon Ungu Makassar</div>
     </form>
   </div>

     <script src="<?php echo base_url('public/assets/bootstrap.bundle.js')?>"></script>
</body>
</html>