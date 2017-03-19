<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends ADMIN_Controller {

	public function index () {
		$this->inserirSEO( 'Usuários', '', '', 'admin/usuarios' );

    $this->addDataTable();

		$this->data['rows'] = $this->usuarios_model->get_all();
		$this->exibirPagina('usuarios/index');
	}

	public function logs () {
		$this->inserirSEO( 'Log Usuários', '', '', 'admin/usuarios/logs' );

    $this->addDataTable();

		$this->data['rows'] = $this->usuarios_model->getLog();
		$this->exibirPagina('usuarios/logs');
	}

	public function form ( $id = NULL )	{

		$this->inserirSEO( 'Cadastro', '', '', 'admin/usuarios' );

		$this->data['action'] = 'admin/usuarios/form';

		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		// CADASTRAR / ALTERAR
		if ( $this->input->post() ) {

			if ( $this->form_validation->run() == TRUE ) {

				$data = $this->input->post();

				if ( $data['senha'] != '**********' ) {
					$data['senha'] = MD5($this->input->post('senha'));
				} else {
					unset($data['senha']);
				}

				$loginDuplicado = $this->usuarios_model->getUserByLogin($data['login'], $id);

				if ( !$loginDuplicado ) {

					if ( $id ) {
						$this->usuarios_model->update( $data, $id );
					} else {
						$id = $this->usuarios_model->insert( $data );
					}
					$this->addResposta('success', 'Dados salvos com sucesso!');
				} else {
					$this->addResposta('danger', 'Erro ao efetuar cadastro! Login já existente.');
				}
			} else {
				$this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
			}
		}

		// PREENCHER CAMPOS
		if ( $id ) {

			$usuario = $this->usuarios_model->get($id);

			if ( $usuario ) {
				$this->data['action']       = 'admin/usuarios/form/'.$id;
				$this->data['row']          = get_object_vars($usuario);
				$this->data['row']['senha'] = '**********';
			} else {
				redirect('admin/usuarios/form');
			}

		} else {
			$this->data['row'] = $this->usuarios_model->get_columns_null();
		}

		$this->exibirPagina('usuarios/form');
	}

	public function remover ( $id )	{
		$this->usuarios_model->update(array('excluido' => time()), $id);
		redirect('admin/usuarios/index');
	}

}