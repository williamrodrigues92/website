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
                <a class="preview" target="_blank" href="<?php echo base_url() ?>portfolio-exibir/<?php echo $projeto->id ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver projeto</a>
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
      <h2 class="section-title">Soluções</h2>
      <hr class="linha">
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-web.png">
            <h3 class="media-heading">Criação de Sites e Sistemas</h3>
            <p>
              Atuamos no desenvolvimento, manutenção, atualização e integração de websites e sistemas web.
              Desenvolvemos websites profissionais responsivos, compatíveis com tablets e smartphones.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-marketing.png">
            <h3 class="media-heading">Marketing Digital</h3>
            <p>
              Criação e consultoria de campanhas de marketing digital com SEO, E-mail marketing,
              Google Adwords, Criação de conteúdos e Gerenciamento de Redes Sociais.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/teste3.png">
            <h3 class="media-heading">Suporte e Hospedagem</h3>
            <p>
              Planos para Suporte e Hospedagem de sites, Atualização de Sistemas, plugins e componentes.
              Nossos servidores contam com segurança contra vírus além de Backup sistemático de conteúdo.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-design.png">
            <h3 class="media-heading">Design, logo e papelaria</h3>
            <p>
              Criação de identidade visual da sua empresa e toda comunicação visual com
              logo, cartões de visita, folders, banners para site e redes sociais.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/icon-tour.png">
            <h3 class="media-heading">Tour 360º</h3>
            <p>
              Proporcione a seus clientes a possibilidade de fazer uma passeios virtual pela sua empresa
              através do Google Maps. Realizado por profissional de confiança certificado pela Google.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown">
          <div class="media-body">
            <img src="<?php echo base_url() ?>assets/images/services/teste.png">
            <h3 class="media-heading">Consultoria e Treinamento</h3>
            <p>
              Nossa equipe pode lhe auxiliar a descobrir as melhores tecnologias e ferramentas para
              otimizar seu negócio. Treinamentos e cursos também são oferecidos pela nossa equipe.
            </p>
            <a class="preview" href="<?php echo base_url() ?>solucoes"><button class="btn btn-primary btn-lg">Saiba mais</button></a>
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