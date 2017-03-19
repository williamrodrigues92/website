<section id="contact-page">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2 class="section-title">Contato</h2>
      <hr class="linha">
    </div>

    <?php if (isset($enviado)) { ?>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 status alert alert-success">
          <i class="glyphicon glyphicon-thumbs-up"></i> Enviado com sucesso
        </div>
      </div>
    <?php } ?>

    <div class="row contact-wrap">
      <form class="contact-form form-horizontal" id="main-contact-form" class="" name="contact-form" action="" method="post">
        <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label">Nome</label>
            <div class="col-md-5 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="nome" placeholder="Nome" class="form-control"  type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-5 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-mail" class="form-control"  type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Telefone</label>
            <div class="col-md-5 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="telefone" class="form-control phoneMask" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Assunto</label>
            <div class="col-md-5 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="assunto" class="form-control">
                  <option value="Orçamento">Orçamento</option>
                  <option value="Financeiro">Financeiro</option>
                  <option value="Parcerias">Parcerias</option>
                  <option value="Dúvidas">Dúvidas</option>
                  <option value="Sugestões">Sugestões</option>
                  <option value="Outros">Outros</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Mensagem</label>
            <div class="col-md-5 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-9" style="text-align: right;">
              <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar <span class="glyphicon glyphicon-send"></span></button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</section>