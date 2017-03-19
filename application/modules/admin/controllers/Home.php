<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends ADMIN_Controller {

	public function index () {
		$this->inserirSEO( 'Home', '', '', 'admin/home' );
		$this->exibirPagina('home');
	}

	public function logoff () {
		$this->session->unset_userdata('id_session');
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function page404 () {
		$this->inserirSEO( 'Página não encontrada - 404', 'pagina não encontrada, erro 404', '', '404' );
		$this->data['metatags']['robots'] = 'noindex, follow';
		$this->exibirPagina('404');
	}

}