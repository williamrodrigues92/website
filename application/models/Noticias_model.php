<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_model extends FITO_Model {

	public function __construct () {
    $this->table = 'noticias';
		parent::__construct();
	}

  public function get_all ( $where = NULL ) {
    $this->db->where('excluido = 0');
    return parent::get_all($where);
  }

}

/* End of file Noticias_model.php */
/* Location: ./application/models/Noticias_model.php */