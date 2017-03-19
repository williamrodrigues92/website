<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends ADMIN_Controller {

  public function index () {
    $this->inserirSEO( 'Clientes', '', '', 'admin/clientes' );
    $this->addDataTable();
    $this->data['rows'] = $this->clientes_model->get_all();
    $this->exibirPagina('clientes/index');
  }

  public function form ( $id = NULL ) {

    $this->inserirSEO( 'Cadastro', '', '', 'admin/clientes/form' );

    $this->data['action'] = 'admin/clientes/form';

    $this->form_validation->set_rules('nome', 'Nome', 'required');

    // CADASTRAR / ALTERAR
    if ( $this->input->post() ) {

      if ( $this->form_validation->run() == TRUE ) {

        $data = $this->input->post();
        $data['data_nascimento'] = inserirData($data['data_nascimento']);

        if ( $id ) {
          $this->clientes_model->update($data, $id);
        } else {
          $id = $this->clientes_model->insert($data);
        }

        $this->addResposta('success', 'Dados salvos com sucesso!');
      } else {
        $this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
      }
    }

    // PREENCHER CAMPOS
    if ( $id ) {

      $row = $this->clientes_model->get($id);

      if ( $row ) {
        $this->data['action'] = 'admin/clientes/form/' . $id;
        $this->data['row']    = get_object_vars($row);
      } else {
        redirect('admin/clientes/form');
      }

    } else {
      $this->data['row'] = $this->clientes_model->get_columns_null();
    }

    $this->exibirPagina('clientes/form');
  }

  public function remover ( $id ) {
    $data['excluido'] = time();
    $this->clientes_model->update($data, $id);
    redirect('admin/clientes');
  }

}