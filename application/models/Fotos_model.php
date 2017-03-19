<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fotos_model extends FITO_Model {

	public function __construct () {
    $this->table = 'fotos';
		parent::__construct();
	}

	public function getFotosById ( $id_galeria = NULL ) {
		$this->db->order_by('ordem', 'ASC');
		return $this->db->get_where( 'fotos', array('id_galeria' => $id_galeria) )->result();
	}

	public function get_all($where = null){
		$this->db->order_by('ordem', 'ASC');
		return parent::get_all();
	}

	public function atualizar ( $id, $dados ) {
		$this->db->where('id', $id);
		return $this->db->update('fotos', $dados);
	}

}

/* End of file Fotos_model.php */
/* Location: ./application/models/Fotos_model.php */