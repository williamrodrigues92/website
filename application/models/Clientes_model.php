<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends FITO_Model {

  public function __construct () {
    $this->table = 'clientes';
		parent::__construct();
	}

  public function get_all ( $where = NULL ) {
    $this->db->where('excluido = 0');
    return parent::get_all($where);
  }

}

/* End of file Clientes_model.php */
/* Location: ./application/models/Clientes_model.php */