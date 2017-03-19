<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends ADMIN_Controller {

  public function index () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );

    $this->addRecurso('../libraries/morrisjs/css/morris.css', 'css');
    $this->addRecurso('../libraries/raphael/js/raphael.min.js', 'js');
    $this->addRecurso('../libraries/morrisjs/js/morris.js', 'js');
    $this->addRecurso('morris-data.js', 'js');

    $this->exibirPagina('teste/index');
  }

  public function flot () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );

    $this->addRecurso('../libraries/flot/js/excanvas.min.js', 'js');
    $this->addRecurso('../libraries/flot/js/jquery.flot.js', 'js');
    $this->addRecurso('../libraries/flot/js/jquery.flot.pie.js', 'js');
    $this->addRecurso('../libraries/flot/js/jquery.flot.resize.js', 'js');
    $this->addRecurso('../libraries/flot/js/jquery.flot.time.js', 'js');
    $this->addRecurso('../libraries/flot-tooltip/js/jquery.flot.tooltip.min.js', 'js');

    $this->addRecurso('flot-data.js', 'js');

    $this->exibirPagina('teste/flot');
  }

  public function morris () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );

    $this->addRecurso($this->morris, 'libraries_admin');
    $this->addRecurso($this->raphael, 'libraries_admin');
    $this->addRecurso('morris-data.js', 'js');

    $this->exibirPagina('teste/morris');
  }

  public function tables () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );

    $this->addRecurso($this->dataTableJquery, 'libraries_admin');
    $this->addRecurso($this->dataTable, 'libraries_admin');
    $this->addRecurso('dataTable.js', 'js');

    $this->exibirPagina('teste/tables');
  }

  public function forms () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/forms');
  }

  public function panelswells () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/panelswells');
  }

  public function buttons () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/buttons');
  }

  public function notifications () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/notifications');
  }

  public function typography () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/typography');
  }

  public function grid () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/grid');
  }

  public function login () {
    $this->inserirSEO( 'Teste', '', '', 'admin/teste' );
    $this->exibirPagina('teste/login');
  }

  public function mymodel() {

    $this->inserirSEO( 'MY Model', '', '', 'admin/teste' );

    $this->output->enable_profiler(TRUE);

    $this->data['users_as_array']    = $this->usuarios_model->as_array()->get_all();
    $this->data['users_as_dropdown'] = $this->usuarios_model->as_dropdown('login')->get_all();

    $this->exibirPagina('teste/mymodel');
  }

}