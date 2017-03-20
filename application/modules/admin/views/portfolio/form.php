<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Portfolio</h1>
				<ol class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
						<a href="<?php echo base_url(); ?>admin/portfolio"><i class="fa fa-fw fa-bars"></i> Portfolio</a> /
						<i class="fa fa-fw fa-plus"></i> Cadastro
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

		<?php if (isset($resposta)) { ?>
			<div class="row">
				<div class="alert alert-<?php echo $classe ?> col-md-4 col-md-offset-4"><strong><?php echo $resposta ?></strong></div>
			</div>
		<?php } ?>

		<?php echo validation_errors(); ?>

		<?php echo form_open_multipart($action) ?>

		<div class="row form-group">
			<div class="col-md-12">
				<label>Título</label>
				<input name="titulo" class="form-control" id="titulo" required value="<?php echo $row['titulo'] ?>">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label>Imagem</label>
				<input name="imagem" type="file" class="form-control file" id="imagem">
			</div>
		</div>

		<div class="row form-group">
			<?php if($row['imagem']){ ?>
				<div class="col-md-4">
					<a href="<?php echo base_url() . 'uploads/portfolio/' . $row['imagem'] ?>" class="btn btn-default padding-07 margin-right-15" target="_blank">Visualizar</button></a>
					<a href="<?php echo base_url() . 'admin/portfolio/remover_imagem/' . $row['id'] ?>" class="btn btn-danger padding-07 remove">Remover</button></a>
				</div>
			<?php } ?>
		</div>

		<div class="form-group">
			<label>Galeria</label>
			<select name="id_galeria" type="text" class="form-control" id="id_galeria">
				<option value="0">Selecione uma galeria</option>
				<?php foreach ( $galerias as $galeria ) { ?>
					<option <?php echo ($galeria->id == $row['id_galeria']) ? 'selected' : ''; ?> value="<?php echo $galeria->id ?>"><?php echo $galeria->titulo ?></option>
				<?php } ?>
			</select>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label>Chamada</label>
				<textarea class="form-control" name="chamada" id="chamada"><?php echo $row['chamada'] ?></textarea>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label>Descrição</label>
				<textarea class="form-control" name="descricao" id="descricao"><?php echo $row['descricao'] ?></textarea>
			</div>
		</div>

    <div class="row form-group">
			<div class="col-md-12">
	      <button class="btn btn-default" type="reset">Limpar</button>
	      <button class="btn btn-primary" type="submit">Enviar</button>
	    </div>
    </div>

		<?php echo form_close() ?>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->