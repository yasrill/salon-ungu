<!DOCTYPE html>
<html>
  <head>
    <link
      rel="icon"
      href="<?php echo base_url('public/images/2022-04-26.png')?>"
      type="image/gif"
      sizes="16x16"
    />
    <title><?= $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/style.css')?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link href="<?php echo base_url('public/assets/bootstrap.css')?>" rel="stylesheet" />
  
	</head>
  <body>


  <?php $this->renderSection('content'); ?>


  <script src="<?php echo base_url('public/assets/bootstrap.bundle.js')?>"></script>
  </body>
</html>



