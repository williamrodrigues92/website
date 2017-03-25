<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

  <?php foreach ($this->config->item('metatags') as $tag => $value){ ?>
    <meta name="<?php echo $tag ?>" content="<?php echo $value ?>"/>
  <?php } ?>

  <link rel="canonical" href="<?php echo $canonical ?>" />
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png"/>

  <title><?php echo $title . ' - ' . $this->config->item('projeto') ?></title>

  <?php

    foreach ($this->config->item('lib_css_admin') as $library => $files) {
      foreach ($files as $file) {
        echo '<link href="'.base_url().'assets/libraries/'. $library .'/css/'. $file .'" type="text/css" rel="stylesheet" media="screen,projection,print"/>';
      }
    }

    foreach ($this->config->item('css_admin') as $file){
      echo '<link href="'.base_url().'assets/styles/'.$file.'" type="text/css" rel="stylesheet"  media="screen,projection,print"/>';
    }

  ?>

</head>
<body>