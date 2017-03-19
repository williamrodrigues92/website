<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Galeria de Fotos</h1>
				<ol class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
						<a href="<?php echo base_url(); ?>admin/galerias"><i class="fa fa-fw fa-camera"></i> Galeria de Fotos</a> /
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

		<div class="form-group">
			<label>Título</label>
			<input class="form-control" name="titulo" id="titulo" required value="<?php echo $row['titulo'] ?>">
		</div>

		<div class="form-group">
			<label>Descrição</label>
			<textarea class="form-control" name="descricao" id="descricao"><?php echo $row['descricao'] ?></textarea>
		</div>

    <div class="form-group">
      <button class="btn btn-default" type="reset">Limpar</button>
      <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

		<?php echo form_close() ?>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->