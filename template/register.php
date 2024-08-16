<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="images\2022-04-26.png" type="image/gif" sizes="16x16" />
   <title>Registrasi User | Salon Ungu</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <link href="assets/bootstrap.css" rel="stylesheet">



</head>
<body>
   
   <div class="register">
     <form action="#" method="post">
      <div class="text-center">
         <img src="images\2022-04-26.png" width="100px" height="100px" class="mt-2"/>
         <h3 class="font-size-h3 mb-3 mt-3 font-weight-bolder">Sign Up</h3>
         <p class="text-dark mb-5">Masukkan detail Anda untuk membuat akun Anda</p>
     </div>

        <!-- <?php if (isset($_GET['error'])) { ?>
			   <p class="error"><?php echo $_GET['error']; ?></p>
		   <?php  } ?> -->


         <label>Email:</label>
         <!-- <?php if (isset($_GET['nama'])) { ?> -->
            <input type="text" 
                   name="Email" 
                   placeholder="Masukkan Email anda"><br>
                   <!-- value="<?php echo $_GET['nama']; ?>" -->
		   <!-- <?php  } else { ?> -->
            <!-- <input type="text" 
                   name="nama" 
                   placeholder="Masukkan Nama"><br> -->
         <!-- <?php } ?>  -->

         <label>Password:</label>
         <input type="password" 
                name="password" 
                placeholder="Masukkan Password"><br>

            <label>Konfirmasi Password:</label>
            <input type="password" 
                   name="repassword" 
                   placeholder="Ulangi Password"><br>

         <label>Nama Lengkap:</label>
         <!-- <?php if (isset($_GET['username'])) { ?> -->
            <input type="text" 
                   name="Nama" 
                   placeholder="Masukkan Nama anda"><br>
                   <!-- value="<?php echo $_GET['username']; ?>" -->
		   <!-- <?php  } else { ?> -->
            <!-- <input type="text" 
                   name="username" 
                   placeholder="Masukkan Username"><br> -->
         <!-- <?php } ?>  -->
         
         <label>Alamat:</label>
         <!-- <?php if (isset($_GET['username'])) { ?> -->
            <textarea type="text" 
                   name="Alamat" 
                   placeholder="Masukkan Alamat anda"></textarea><br>
                   <!-- value="<?php echo $_GET['username']; ?>" -->
		   <!-- <?php  } else { ?> -->
            <!-- <input type="text" 
                   name="username" 
                   placeholder="Masukkan Username"><br> -->
         <!-- <?php } ?>  -->

         <label>Nomor Handphone:</label>
         <!-- <?php if (isset($_GET['username'])) { ?> -->
            <input type="text" 
                   name="Nomor" 
                   placeholder="Masukkan Nomor Telepon anda"><br>
                   <!-- value="<?php echo $_GET['username']; ?>" -->
		   <!-- <?php  } else { ?> -->
            <!-- <input type="text" 
                   name="username" 
                   placeholder="Masukkan Username"><br> -->
         <!-- <?php } ?>  -->


                           

     	<button type="submit" name="register">Submit</button>
      
        <div class="mt-1 ngelink">
         <span class="text-dark-50">Sudah Punya Akun ?</span>
         <a href="login.html"class="font-weight-bold">Login disini!</a>
     </div>

        <div class="text-dark-50 font-weight-bold text-center ungu">© 2022 Salon Ungu Makassar</div>
     </form>
   </div>

     <script src="assets/bootstrap.bundle.js"></script>
</body>
</html>