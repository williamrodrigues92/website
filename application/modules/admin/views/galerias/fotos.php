<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">Fotos - <?php echo $galeria->titulo ?></h1>
        <ol class="breadcrumb">
          <li class="active">
            <a href="<?php echo base_url(); ?>admin"><i class="fa fa-fw fa-home"></i> Página Inicial</a> /
            <a href="<?php echo base_url(); ?>admin/galerias"><i class="fa fa-fw fa-camera"></i> Galeria de Fotos</a> /
            <i class="fa fa-fw fa-picture-o"></i> Fotos
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

    <?php echo form_open_multipart($action) ?>

      <div class="form-group">
        <label>Título</label>
        <input class="form-control" name="titulo" id="titulo" required>
      </div>

      <div class="form-group">
        <label>Foto</label>
        <input class="form-control file" name="imagem" type="file" id="imagem">
      </div>

      <div class="form-group">
        <button class="btn btn-default" type="reset">Limpar</button>
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>

      <?php echo form_close() ?>

      <?php echo form_open('admin/galerias/ordenar/' . $id_galeria) ?>

      <!-- Panel Fotos -->
      <div class="panel panel-default">
        <div class="panel-heading">Arraste as fotos para ordenar</div>
        <div class="panel-body">
          <div class="row" id="sortable">
            <?php foreach ($rows as $row) { ?>
              <div class="col-md-2 text-center">
                <div class="thumbnail">
                  <img src="<?php echo base_url() . 'uploads/galerias/'. $id_galeria .'/'. $row->imagem ?>" />
                  <div class="caption">
                    <h3><?php echo $row->titulo ?></h3>
                    <a href="<?php echo base_url().'admin/galerias/remover_foto/'.$row->id ?>"><i class="fa fa-fw fa-trash"></i></a>
                    <input name="ordem[]" type="hidden" value="<?php echo $row->id ?>" />
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <?php if ( count($rows) > 1 ) { ?>
            <div class="form-group text-center">
              <button class="btn btn-default" type="submit">OK</button>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- END Panel Fotos -->

    <?php echo form_close() ?>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->