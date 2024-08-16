<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="<?php echo base_url('public/admin/assets/img/2022-04-26.png')?>" type="image/gif" sizes="16x16" />
        <title><?= $title; ?></title>
        <link href="<?php echo base_url('public/admin/css/styles.css')?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body style="background-color: #8a2be2;">


    <?php $this->renderSection('content'); ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('public/admin/js/scripts.js"')?>></script>
    </body>
</html>
