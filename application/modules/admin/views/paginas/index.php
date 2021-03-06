<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">Páginas</h1>
        <ol class="breadcrumb">
          <li class="active">
            <a href="<?php echo base_url(); ?>admin/"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
            <i class="fa fa-fw fa-list"></i> Páginas
          </li>
        </ol>
      </div>
    </div>
    <!-- END Page Heading -->

    <!-- DataTable -->
    <p><a href="<?php echo base_url(); ?>admin/paginas/form"><button type="button" class="btn btn-primary">Cadastrar</button></a></p>
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
              <?php foreach ($rows as $row) { ?>
                <tr>
                  <td><?php echo $row->id ?></td>
                  <td><?php echo $row->titulo ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url() ?>admin/paginas/form/<?php echo $row->id ?>" class="edit" title="Editar"><i class="fa fa-fw fa-pencil"></i></a>
                    <a href="<?php echo base_url() ?>admin/paginas/remover/<?php echo $row->id ?>" class="remove" title="Remover"><i class="fa fa-fw fa-trash"></i></a>
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