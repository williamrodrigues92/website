<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Galeria de Fotos</h1>
				<ol class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
						<i class="fa fa-fw fa-camera"></i> Galeria de Fotos
					</li>
				</ol>
			</div>
		</div>
		<!-- END Page Heading -->

		<!-- DataTable -->
    <p><a href="<?php echo base_url(); ?>admin/galerias/form"><button type="button" class="btn btn-primary">Cadastrar</button></a></p>
    <div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered dataTable">
					<thead>
						<tr>
							<th class="col-md-1">#</th>
							<th>Título</th>
							<th class="col-md-1 text-center nosort">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($rows) { ?>
							<?php foreach ($rows as $row){ ?>
								<tr>
									<td><?php echo $row->id ?></td>
									<td><?php echo $row->titulo ?></td>
	                <td class="text-center">
										<a title="Fotos" class="fotos" href="galerias/fotos/<?php echo $row->id ?>"><i class="fa fa-fw fa-camera"></i></a>
	                  <a title="Editar" class="edit" href="<?php echo base_url().'admin/galerias/form/'.$row->id ?>"><i class="fa fa-fw fa-pencil"></i></a>
	                  <a title="Remover" class="remove" href="<?php echo base_url().'admin/galerias/remover/'.$row->id ?>"><i class="fa fa-fw fa-trash"></i></a>
	                </td>
								</tr>
							<?php } ?>
            <?php } else { ?>
              <tr><td colspan="3">Nenhum registro encontrado.</td></tr>
            <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- END DataTable -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->