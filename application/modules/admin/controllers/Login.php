<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct () {
		parent::__construct();
	}

	public function index () {
		$this->inserirSEO('Login', '', '', 'admin/login');
		$this->load->view('template/header', $this->data);
		$this->load->view('login');
	}

	public function auth () {

		$dados['login']    = $this->input->post('login');
		$dados['senha']    = md5($this->input->post('senha'));
		$dados['excluido'] = 0;

		$usuario = $this->usuarios_model->get($dados);

		if ( $usuario ) {

			$data['id_usuario'] = $usuario->id;
			$data['data']       = date('Y-m-d H:i:s');

			$this->usuarios_model->insertLog($data);
			$this->session->set_userdata('id_session', $usuario->id);
			$this->session->set_userdata('nome_session', $usuario->nome);
			$this->session->set_userdata('acl', $usuario->acl);

			redirect('admin/home');
		} else {
			$this->inserirSEO( 'Login', '', '', 'admin/login' );
			$this->data['resposta'] = 'Erro ao efetuar login. Usuário ou senha inválido(s).';

			$opcoes = array('sidebar' => '');
			$this->exibirPagina('login', $opcoes);
		}

	}

	public function page404 () {
		$this->inserirSEO( 'Página não encontrada - 404', 'pagina não encontrada, erro 404', '', '404' );
		$this->data['metatags']['robots'] = 'noindex, follow';
		$this->exibirPagina('404');
	}

}