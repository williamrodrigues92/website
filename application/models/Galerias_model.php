<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galerias_model extends FITO_Model {

	public function __construct () {
    $this->table = 'galerias';
		parent::__construct();
	}

	public function getByID ( $id_galeria = NULL ) {
		$this->db->from('fotos');
		$this->db->order_by('ordem', 'ASC');
		$this->db->where('id_galeria', $id_galeria);
		return parent::get_all(NULL);
	}

}

/* End of file Galerias_model.php */
/* Location: ./application/models/Galerias_model.php */