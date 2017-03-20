<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data    = array();
	public $morris  = array('morrisjs' => array('javascript' => array('morris.js'), 'style' => array('morris.css')));
	public $raphael = array('raphael' => array('javascript' => array('raphael.min.js')));

	public function __construct () {

		parent::__construct();

		$this->load->model('noticias_model');
		$this->load->model('clientes_model');
		$this->load->model('fotos_model');
		$this->load->model('galerias_model');
		$this->load->model('paginas_model');
		$this->load->model('portfolio_model');
		$this->load->model('usuarios_model');

		$this->load->helper('form');
		$this->load->helper('class.upload');

		$this->load->library('form_validation');
	}

	public function authAdmin ($login = NULL) {

		$session = $this->session->userdata('id_session');

		if (!$session AND !$login) {
			redirect('admin/login');
		}

		if ($session AND $login) {
			redirect('admin/home');
		}
	}

	public function exibirPagina ( $pagina, $opcoes = array() ) {

		$default = array(
			'header'  => 'header',
			'sidebar' => 'sidebar',
			'footer'  => 'footer',
		);

		$configs = array_merge($default, $opcoes);

		if($configs['header']){ $this->load->view( 'template/'.$configs['header'], $this->data ); }
		if($configs['sidebar']){ $this->load->view( 'template/'.$configs['sidebar'] ); }

		$this->load->view($pagina);

		if($configs['footer']){ $this->load->view( 'template/'.$configs['footer'] ); }
	}

	public function exibirPaginaSite ( $pagina, $opcoes = array() ) {

		$default = array(
			'header'  => 'header',
			'menu'    => 'menu',
			'footer'  => 'footer',
			'scripts' => 'scripts',
		);

		$configs = array_merge($default, $opcoes);

		if($configs['header']){ $this->load->view( 'template/'.$configs['header'], $this->data ); }
		if($configs['menu']){ $this->load->view( 'template/'.$configs['menu'] ); }

		$this->load->view($pagina);

		if($configs['footer']){ $this->load->view( 'template/'.$configs['footer'] ); }
		if($configs['scripts']){ $this->load->view( 'template/'.$configs['scripts'] ); }
	}

	public function inserirSEO ( $title = '', $keywords = '', $description = '', $canonical = '' ) {

		$this->data['title']                   = $title;
		$this->data['metatags']['keywords']    = $keywords;
		$this->data['metatags']['description'] = $description;
		$this->data['canonical']               = base_url() . $canonical;
	}

	public function addRecurso ( $arquivo, $tipo ) {
		$this->config->load('config');
		$recurso = $this->config->item($tipo);
		if(is_array($arquivo)){
			foreach ($arquivo as $key => $value) {
				$recurso[$key] = $value;
			}
		} else {
			$recurso[] = $arquivo;
		}
		$this->config->set_item($tipo, $recurso);
	}

	public function addDataTable(){
		$dataTableJquery = array('datatables' => array('jquery.dataTables.min.js'));
		$dataTable       = array('datatables-plugins' => array('dataTables.bootstrap.min.js'));

    $this->addRecurso($dataTableJquery, 'lib_js_admin');
    $this->addRecurso($dataTable, 'lib_js_admin');
    $this->addRecurso('dataTable.js', 'js');
	}

	public function addTinyMCE(){
		$tinyMCEJquery = array('tinymce' => array('jquery.tinymce.min.js'));
		$tinyMCE       = array('tinymce' => array('tinymce.min.js'));
    $this->addRecurso($tinyMCEJquery, 'lib_js_admin');
    $this->addRecurso($tinyMCE, 'lib_js_admin');
    $this->addRecurso('tinymce.js', 'js');
	}

	public function addResposta($classe, $mensagem){
		$this->data['classe']   = $classe;
		$this->data['resposta'] = $mensagem;
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */