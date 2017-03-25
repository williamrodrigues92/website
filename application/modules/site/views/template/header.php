<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="<?php echo $metatags['keywords'] ?>"/>
  <meta name="description" content="<?php echo $metatags['description'] ?>"/>

  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png"/>
  <link rel="canonical" href="<?php echo $this->config->item('canonical'); ?>" />

  <title><?php echo $title.' - '.$this->config->item('projeto') ?></title>

  <?php

    foreach ($this->config->item('lib_css') as $library => $files) {
      foreach ($files as $file) {
        echo '<link href="'.base_url().'assets/libraries/'.$library.'/css/'. $file .'" type="text/css" rel="stylesheet" media="all"/>' . PHP_EOL;
      }
    }

  ?>

  <?php foreach ($this->config->item('css') as $file) { ?>
    <link href="<?php echo base_url() . 'assets/styles/'.$file ?>" type="text/css" rel="stylesheet"  media="screen,projection" />
  <?php } ?>

  <!--[if lt IE 9]>
  <script src="<?php echo base_url() ?>assets/libraries/jquery/js/html5shiv.js"></script>
  <script src="<?php echo base_url() ?>assets/libraries/jquery/js/respond.min.js"></script>
  <![endif]-->

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/images/ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/images/ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/images/ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/images/ico/apple-icon-57x57.png">

</head>

<body class="homepage">