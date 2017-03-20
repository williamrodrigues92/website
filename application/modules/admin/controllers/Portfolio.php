<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller {

  public function index () {

    $this->inserirSEO( 'Portfolio', '', '', 'admin/portfolio' );

    $this->addDataTable();

    $this->data['rows'] = $this->portfolio_model->get_all();

    $this->exibirPagina('portfolio/index');
  }

  public function form ( $id = NULL ) {

    $this->inserirSEO( 'Cadastro', '', '', 'admin/portfolio/form' );

    $this->addTinyMCE();

    $this->data['action'] = 'admin/portfolio/form';
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

            $dirname = './uploads/portfolio/';

            $foo->file_new_name_body = $filename;
            $foo->image_convert      = "jpg";

            $foo->Process($dirname);

            if ( $foo->processed ) {
              $data['imagem'] = $filename . '.jpg';
            }
          }
        }

        if ( $id ) {
          $this->portfolio_model->update($data, $id);
        } else {
          $data['data'] = date('Y-m-d H:i:s');
          $id = $this->portfolio_model->insert($data);
        }
        $this->addResposta('success', 'Dados salvos com sucesso!');
      } else {
        $this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
      }
    }

    // PREENCHER CAMPOS
    if ( $id ) {

      $row = $this->portfolio_model->get($id);

      if ( $row ) {
        $this->data['action'] = 'admin/portfolio/form/' . $id;
        $this->data['row']    = get_object_vars($row);
      } else {
        redirect('admin/portfolio/form');
      }

    } else {
      $this->data['row'] = $this->portfolio_model->get_columns_null();
    }

    $this->exibirPagina('portfolio/form');
  }

  public function remover ( $id ) {
    $this->portfolio_model->delete($id);
    redirect('admin/portfolio');
  }

  public function remover_imagem ( $id ) {

    $projeto = $this->portfolio_model->get($id);
    unlink('uploads/portfolio/' . $projeto->imagem);

    $this->portfolio_model->update(array("imagem" => NULL), $id);

    redirect('admin/portfolio/form/' . $id);
  }

}