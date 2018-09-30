<!DOCTYPE html>
<html lang="en">
<head>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?= $home; ?>/style.css">
  
  <title>Document</title>
</head>
<body>
<div class="container">
  <header>

    <?php 
      $args = array(
        'theme_location' => 'header-menu',
      );
      wp_nav_menu($args); 

    ?>
  </header>
</div>