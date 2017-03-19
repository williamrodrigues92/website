<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Notícias</h1>
				<ol class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
						<a href="<?php echo base_url(); ?>admin/noticias"><i class="fa fa-fw fa-bars"></i> Notícias</a> /
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

		<div class="form-group">
			<label>Título</label>
			<input name="titulo" class="form-control" id="titulo" required value="<?php echo $row['titulo'] ?>">
		</div>

		<div class="form-group">
			<label>Chamada</label>
			<input name="chamada" class="form-control" id="chamada" required value="<?php echo $row['chamada'] ?>">
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

		<div class="form-group">
			<label>Texto</label>
			<textarea class="form-control" name="texto" id="texto"><?php echo $row['texto'] ?></textarea>
		</div>

		<div class="form-group">
				<label>Imagem</label>
				<input name="imagem" type="file" class="form-control file" id="imagem">
				<?php if($row['imagem']){ ?>
					<div class="col-sm-3 padding-05">
						<a href="<?php echo base_url() . 'uploads/noticias/' . $row['imagem'] ?>" class="bg-primary padding-07 margin-right-15" target="_blank">Visualizar</a>
						<a href="<?php echo base_url() ?>admin/noticias/remover_imagem/<?php echo $id ?>" class="bg-danger padding-07 remove" target="_blank">Remover</a>
					</div>
				<?php } ?>
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