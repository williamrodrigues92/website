<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends ADMIN_Controller {

  public function index () {

    $this->inserirSEO( 'Noticias', '', '', 'admin/noticias' );

    $this->addDataTable();

    $this->data['rows'] = $this->noticias_model->get_all();

    $this->exibirPagina('noticias/index');
  }

  public function form ( $id = NULL ) {

    $this->inserirSEO( 'Cadastro', '', '', 'admin/noticias/form' );

    $this->addTinyMCE();

    $this->data['action'] = 'admin/noticias/form';
    $this->data['galerias'] = $this->galerias_model->get_all();

    $this->form_validation->set_rules('titulo', 'Título', 'required');

    // CADASTRAR / ALTERAR
    if ( $this->input->post() ) {

      if ( $this->form_validation->run() == TRUE ) {

        $data = $this->input->post();

        if ( isset($_FILES['imagem']) ) {

          $filename = time();
          $foo = new Upload($_FILES['imagem']);

          if ( $foo->uploaded && $foo->file_is_image ) {

            $dirname = './uploads/noticias/'.$id;

            $foo->file_new_name_body = $filename;
            $foo->image_convert      = "jpg";
            /*$foo->image_resize       = true;
            $foo->image_ratio_crop   = true;
            $foo->image_x            = 650;
            $foo->image_y            = 400;*/

            $foo->Process($dirname);

            if ( $foo->processed ) {
              $data['imagem'] = $filename . '.jpg';
            }
          }
        }

        if ( $id ) {
          $this->noticias_model->update($data, $id);
        } else {
          $data['data'] = date('Y-m-d H:i:s');
          $id = $this->noticias_model->insert($data);
        }
        $this->addResposta('success', 'Dados salvos com sucesso!');
      } else {
        $this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
      }
    }

    // PREENCHER CAMPOS
    if ( $id ) {

      $row = $this->noticias_model->get($id);

      if ( $row ) {
        $this->data['action'] = 'admin/noticias/form/' . $id;
        $this->data['row']    = get_object_vars($row);
      } else {
        redirect('admin/noticias/form');
      }

    } else {
      $this->data['row'] = $this->noticias_model->get_columns_null();
    }

    $this->exibirPagina('noticias/form');
  }

  public function remover ( $id ) {
    $this->noticias_model->update(array('excluido' => time()), $id);
    redirect('admin/noticias');
  }

  public function remover_imagem ( $id ) {

    $projeto = $this->noticias_model->get($id);
    unlink('uploads/noticias/' . $projeto->imagem);

    $this->noticias_model->update(array("imagem" => NULL), $id);

    redirect('admin/noticias/form/' . $id);
  }

}