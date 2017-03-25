<section id="blog" class="container">
  <div class="center wow fadeInDown">
    <h2 class="section-title"><?php echo $projeto->titulo ?></h2>
    <hr class="linha">
  </div>

  <div class="blog">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-item">
          <div class="row">
            <div class="col-xs-12 col-sm-12 blog-content">
              <?php echo $projeto->chamada ?>
              <?php echo $projeto->descricao ?>
              <a href="<?php echo $projeto->link ?>"><h2>Visite o site</h2></a>
            </div>
          </div>
          <div class="row">
            <?php if ($galeria) { ?>
              <?php foreach ($galeria as $foto) { ?>
                <div class="col-md-3">
                  <img class="img-responsive img-blog" src="<?php echo base_url() ?>uploads/galerias/<?php echo $projeto->id_galeria ?>/<?php echo $foto->imagem ?>"alt="" />
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>