<section id="portfolio">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2 class="section-title">Portfólio</h2>
      <hr class="linha">
      <p class="lead">Veja os trabalhos realizados pela Fito</p>
    </div>

    <div class="row center">

      <?php foreach ($projetos as $projeto) { ?>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="recent-work-wrap">
            <a href="<?php echo base_url() ?>portfolio-exibir/<?php echo $projeto->id ?>">
              <img class="img-responsive" src="<?php echo base_url() ?>uploads/portfolio/<?php echo $projeto->imagem ?>" alt="">
            </a>
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="<?php echo base_url() ?>portfolio-exibir/<?php echo $projeto->id ?>"><?php echo $projeto->titulo ?></a></h3>
                <?php echo $projeto->chamada ?>
                <?php echo $projeto->descricao ?>
                <a class="preview" href="<?php echo base_url() ?>portfolio-exibir/<?php echo $projeto->id ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver projeto</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>
