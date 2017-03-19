<?php if(isset($resposta)): ?>
    <div class="row">
        <div class="alert alert-danger col-md-4 col-md-offset-4"><strong>Atenção:</strong> <?php echo $resposta ?></div>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                
                <div class="text-center margin-top-10 margin-bottom-10">
                    <img src="<?php echo base_url() ?>assets/admin/images/logo.jpg" alt="Logo" />
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

                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" style="background: #000" class="btn btn-lg btn-primary btn-block">Entrar</button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>