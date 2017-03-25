<section id="recent-works">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2 class="section-title">Últimos projetos</h2>
      <hr class="linha">
    </div>

    <div class="row center">

      <?php foreach ($projetos as $projeto) { ?>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="<?php echo base_url() ?>uploads/portfolio/<?php echo $projeto->imagem ?>" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#"><?php echo $projeto->titulo ?></a> </h3>
                <?php echo $projeto->chamada ?>
                <a class="preview" target="_blank" href="<?php echo base_url() ?>/portfolio-exibir/<?php echo $projeto->id ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver projeto</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

    <div class="row">
      <a class="preview" target="_blank" href="<?php echo base_url() ?>/portfolio"><button class="btn btn-primary btn-lg">Ver todos</button></a>
    </div>
  </div>
</section>

<section id="services" class="service-item">
  <div class="container">

    <div class="center wow fadeInDown">
      <h2 class="section-title">Serviços</h2>
      <hr class="linha">
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-web.png">
            <h3 class="media-heading">Criação de Sites</h3>
            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-seo.png">
            <h3 class="media-heading">SEO Marketing</h3>
            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-virtual-shop.png">
            <h3 class="media-heading">Sistemas Gerenciais</h3>
            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6"><img class="img-responsive" src="<?php echo base_url() ?>assets/images/services/responsive.png"></div>
      <div class="col-sm-6 col-md-6">
        Contamos com profissionais qualificados e com mais de 10 anos de experiência no desenvolvimento de sistemas gerenciais, sites corporativos, loja virtual, marketing digital, e SEO.
        Além disso contamos com uma rede de parceiros que nos permite oferecer soluções completas para o seu negócio.
      </div>
    </div>

  </div>
</section>