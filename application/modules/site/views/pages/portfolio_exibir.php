<section id="blog" class="container">
  <div class="center wow fadeInDown">
    <h2 class="section-title">Projeto Teste</h2>
    <hr class="linha">
  </div>

  <div class="blog">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-item">
          <div class="row">
            <div class="col-xs-12 col-sm-2 text-center">
              <div class="entry-meta">
                <span id="publish_date">07  NOV</span>
                <span><i class="fa fa-user"></i> <a href="#"> John Doe</a></span>
                <span><i class="fa fa-comment"></i> <a href="blog_item#comments">2 Comments</a></span>
                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
              </div>
            </div>
            <div class="col-xs-12 col-sm-10 blog-content">
              <h2><?php echo $projeto->titulo ?></h2>
              <?php echo $projeto->chamada ?>
              <?php echo $projeto->descricao ?>
            </div>
          </div>
          <img class="img-responsive img-blog" src="<?php echo base_url() ?>uploads/portfolio/<?php echo $projeto->imagem ?>" width="100%" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>