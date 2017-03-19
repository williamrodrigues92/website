<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas_model extends FITO_Model {

	public function __construct () {
    $this->table = 'paginas';
		parent::__construct();
	}

  public function get_all ( $where = NULL ) {
    $this->db->where('excluido = 0');
    return parent::get_all($where);
  }

}

/* End of file Paginas_model.php */
/* Location: ./application/models/Paginas_model.php */