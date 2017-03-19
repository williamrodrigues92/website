<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">Usuários</h1>
        <ol class="breadcrumb">
          <li class="active">
            <a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
            <a href="<?php echo base_url(); ?>admin/usuarios"><i class="fa fa-fw fa-user"></i> Usuários</a> /
            <i class="fa fa-fw fa-plus"></i> Cadastro
          </li>
        </ol>
      </div>
    </div>
    <!-- END Page Heading -->

    <?php if (isset($resposta)) { ?>
      <div class="row">
        <div class="alert alert-<?php echo $classe ?> col-md-4 col-md-offset-4"><strong><?php echo $resposta ?></strong></div>
      </div>
    <?php } ?>

    <?php echo validation_errors(); ?>

    <?php echo form_open($action) ?>

    <div class="col-md-6">

      <div class="form-group">
        <label>Nome:</label>
        <input class="form-control" name="nome" id="nome" required value="<?php echo $row['nome'] ?>">
      </div>

      <div class="form-group">
        <label l">E-mail:</label>
        <input class="form-control" type="email" name="email" id="email" required value="<?php echo $row['email'] ?>">
      </div>

      <div class="form-group">
        <label>Tipo:</label>
        <select class="form-control" name="acl" id="acl" required>
          <option value="0" <?php echo ($row['acl'] == 0) ? 'selected' : '' ?> >Admin</option>
        </select>
      </div>

      <div class="form-group">
        <label>Login:</label>
        <input class="form-control" name="login" id="login" placeholder="Login" required value="<?php echo $row['login'] ?>">
      </div>

      <div class="form-group">
        <label>Senha:</label>
        <input class="form-control" type="password" name="senha" id="senha" placeholder="******" required value="<?php echo $row['senha'] ?>">
      </div>

      <input name="id" type="hidden" id="id" value="<?php echo $row['id'] ?>">

      <div class="form-group">
        <button class="btn btn-default" type="reset">Limpar</button>
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>

    </div>

    <?php echo form_close() ?>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->