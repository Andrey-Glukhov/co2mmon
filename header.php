<!doctype html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
  <meta name="keywords" content="CO2mmon" />
  <meta name="description" content="CO2mmon" />

  <title>CO2mmon</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600&family=Barlow:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="https://use.typekit.net/vdc0qgz.css">
  <script src="https://kit.fontawesome.com/52d51e5636.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@latest/dist/svg.min.js"></script>

<?php wp_head(); ?>
</head>

<?php
if(is_front_page()):
  $co2mmon_classes = array('co2mmon_front_class', 'front_class');
else:
  $co2mmon_classes = array('no_co2mmon_front_class');
endif;
?>
<body <?php body_class($co2mmon_classes); ?>>
    <?php include (TEMPLATEPATH . '/navigation.php'); ?>

