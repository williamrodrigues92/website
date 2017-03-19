<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">Logs de acesso</h1>
        <ol class="breadcrumb">
          <li class="active">
            <a href="<?php echo base_url(); ?>admin/"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
            <i class="fa fa-fw fa-tasks"></i> Logs
          </li>
        </ol>
      </div>
    </div>
    <!-- END Page Heading -->

    <!-- DataTable -->
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered dataTable">
          <thead>
            <tr>
              <th>#</th>
              <th>Usuário</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rows as $row) { ?>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->usuario ?></td>
                <td><?php echo formataDataHora($row->data) ?></td>
              </tr>
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