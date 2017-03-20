<section id="portfolio">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2 class="section-title">Portfólio</h2>
      <hr class="linha">
      <p class="lead">Veja os trabalhos realizados pela Fito</p>
    </div>

    <div class="row">
      <div class="portfolio-items">
        <?php foreach ($projetos as $projeto) { ?>
          <div class="portfolio-item col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
              <img class="img-responsive" src="<?php echo base_url() ?>uploads/portfolio/<?php echo $projeto->imagem ?>" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="#"><?php echo $projeto->titulo ?></a></h3>
                  <?php echo $projeto->chamada ?>
                  <?php echo $projeto->descricao ?>
                  <a class="preview" href="<?php echo base_url() ?>/portfolio-exibir/<?php echo $projeto->id ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
