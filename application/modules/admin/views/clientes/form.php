	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Clientes</h1>
					<ol class="breadcrumb">
						<li class="active">
							<a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
							<a href="<?php echo base_url(); ?>admin/clientes"><i class="fa fa-fw fa-list"></i> Clientes</a> /
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
				<label>Nome</label>
				<input class="form-control" name="nome" id="nome" required value="<?php echo $row['nome'] ?>">
			</div>

			<div class="form-group">
				<label>E-mail</label>
				<input class="form-control" type="email" name="email" id="email" required value="<?php echo $row['email'] ?>">
			</div>

			<div class="form-group">
				<label>Telefone</label>
				<input class="form-control" name="telefone" id="telefone" value="<?php echo $row['telefone'] ?>">
			</div>

			<div class="form-group">
				<label>CPF</label>
				<input class="form-control" type="text" name="cpf" id="cpf" required value="<?php echo $row['cpf'] ?>">
			</div>

			<div class="form-group">
				<label>Data Nascimento</label>
				<input class="form-control datepicker" type="text" name="data_nascimento" id="data_nascimento" value="<?php echo $row['data_nascimento'] ?>">
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