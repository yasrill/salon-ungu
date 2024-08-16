<!DOCTYPE html>
<html>
  <head>
    <link
      rel="icon"
      href="images\2022-04-26.png"
      type="image/gif"
      sizes="16x16"
    />
    <title>Login | Salon Ungu</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link href="assets/bootstrap.css" rel="stylesheet" />
  
	</head>
  <body>
    <div class="login">
      <form method="POST" action="#" enctype="multipart/form-data">
        <div class="text-center">
          <img
            src="images\2022-04-26.png"
            width="100px"
            height="100px"
            alt=""
          />
          <h3 class="font-size-h3 mb-4 mt-4 font-weight-bolder">Sign In</h3>
          <p class="text-dark mb-5">Masukkan Email dan Password Anda</p>
        </div>

        <label>Email:</label>
        <input
          type="text"
          class="form-control p-2"
          name="Email"
          placeholder="Masukkan Email"
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
          <a href="register.html" class="font-weight-bold">Daftar disini!</a>
        </div>

        <div class="text-dark-50 font-weight-bold text-center ungu mb-2">
          © 2022 Salon Ungu Makassar
        </div>
      </form>
    </div>

    <script src="assets/bootstrap.bundle.js"></script>
  </body>
</html>
