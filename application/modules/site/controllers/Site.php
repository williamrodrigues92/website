<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

    protected $config_mail = array(
    'smtp_host' => 'ssl://fitosistemas.com',
    'smtp_user' => 'postmaster@fitosistemas.com.br',
    'smtp_pass' => 'd3v3l0p35',
    'smtp_port' => 465,
    'wordwrap'  => FALSE,
    'mailtype'  => 'html' );

  public function __construct () {
    parent::__construct('site');
  }

  public function index() {
    $this->inserirSEO('Home', '', '', 'home');
    $this->exibirPaginaSite('pages/home');
  }

  public function sobre() {
    $this->inserirSEO('A FITO', '', '', 'sobre');
    $this->exibirPaginaSite('pages/sobre');
  }

  public function portfolio() {
    $this->inserirSEO('Portfólio', '', '', 'portfolio');
    $this->exibirPaginaSite('pages/portfolio');
  }

  public function solucoes() {
    $this->inserirSEO('Soluções', '', '', 'solucoes');
    $this->exibirPaginaSite('pages/solucoes');
  }

  public function contato() {
    $this->inserirSEO('Contato', '', '', 'contato');

    if ( $this->input->post() ) {
      $this->envia_form();
    }

    $this->exibirPaginaSite('pages/contato');
  }

  public function envia_form () {

    $campos = $this->input->post();

    $this->data['campos'] = $campos;

    ob_start();
    $this->load->view('forms/padrao',$this->data);
    $html = ob_get_contents();
    ob_end_clean();

    $this->load->library('email');
    $this->email->initialize($this->config_mail);
    $this->email->from($campos['email'], $campos['nome']);
    $this->email->to('william@fitosistemas.com.br');
    $this->email->subject($campos['assunto']);
    $this->email->message($html);

    if ( $this->email->send() ) {

      $this->session->set_userdata( array('enviado' => true) );
      $this->data['enviado'] = TRUE;
    }
  }

  public function page404 () {

    $this->inserirSEO('Página não encontrada - 404', 'Página não encontrada, erro 404', 'Página não encontrada, erro 404', '404');

    addMetaTag('robots','noindex, follow');

    $this->exibirPaginaSite('pages/404');
  }

  /*******************************************************/

  public function shortcodes() {
    $this->inserirSEO('Shortcodes', '', '', 'shortcodes');
    $this->exibirPaginaSite('pages/examples/shortcodes');
  }

  public function blog() {
    $this->inserirSEO('blog', '', '', 'blog');
    $this->exibirPaginaSite('pages/examples/blog');
  }

  public function blog_item() {
    $this->inserirSEO('blog-item', '', '', 'blog-item');
    $this->exibirPaginaSite('pages/examples/blog-item');
  }

}
