<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paginas extends ADMIN_Controller {

  public function index () {

    $this->inserirSEO( 'Páginas', '', '', 'admin/paginas' );

    $this->addDataTable();

    $this->data['rows'] = $this->paginas_model->get_all();

    $this->exibirPagina('paginas/index');
  }

  public function form ( $id = NULL ) {

    $this->inserirSEO( 'Cadastro', '', '', 'admin/paginas/form' );

    $this->addTinyMCE();

    $this->data['action'] = 'admin/paginas/form';

    $this->form_validation->set_rules('titulo', 'Título', 'required');

    // CADASTRAR / ALTERAR
    if ( $this->input->post() ) {

      if ( $this->form_validation->run() == TRUE ) {

        $data = $this->input->post();

        if ( $id ) {
          $this->paginas_model->update($data, $id);
        } else {
          $id = $this->paginas_model->insert($data);
        }
        $this->addResposta('success', 'Dados salvos com sucesso!');
      } else {
        $this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
      }
    }

    // PREENCHER CAMPOS
    if ( $id ) {

      $row = $this->paginas_model->get($id);

      if ( $row ) {
        $this->data['action'] = 'admin/paginas/form/' . $id;
        $this->data['row']    = get_object_vars($row);
      } else {
        redirect('admin/paginas/form');
      }

    } else {
      $this->data['row'] = $this->paginas_model->get_columns_null();
    }

    $this->exibirPagina('paginas/form');
  }

  public function remover ( $id ) {
    $this->paginas_model->update(array('excluido' => time()), $id);
    redirect('admin/paginas');
  }

}