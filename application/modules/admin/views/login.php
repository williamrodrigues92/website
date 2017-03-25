<style type="text/css">body {  background-color: #0f4958; }</style>

<?php if(isset($resposta)): ?>
  <div class="row">
    <div class="alert alert-danger col-md-4 col-md-offset-4"><strong>Atenção:</strong> <?php echo $resposta ?></div>
  </div>
<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="login-panel panel panel-default">
      <div class="panel-heading" id="logo">
        <img src="<?php echo base_url() ?>assets/images/logo_cor.png" alt="Logo" />
      </div>
      <div class="panel-body">
        <form role="form" method="post" action="<?php echo base_url() ?>admin/login/auth">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Login" name="login" type="login" autofocus required="required">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Senha" name="senha" type="password" value="" required="required">
            </div>
            <button type="submit" class="btn btn-success btn-block">Entrar</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>