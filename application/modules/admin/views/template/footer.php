  <?php

    foreach ($this->config->item('lib_js_admin') as $library => $files) {
      foreach ($files as $file) {
        echo '<script src="'.base_url().'assets/libraries/'.$library.'/js/'. $file .'"></script>'.PHP_EOL;
      }
    }

    foreach ($this->config->item('js') as $file){
      echo '<script src="'.base_url().'assets/scripts/'.$file.'"></script>';
    }

  ?>

  </body>

</html>