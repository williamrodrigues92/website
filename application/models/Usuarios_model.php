<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends FITO_Model {

	public function __construct () {
    $this->table = 'usuarios';
		parent::__construct();
	}

	public function getUserByLogin ( $login, $id = NULL ) {

		if ($id) {
			$this->db->where('id !=', $id);
		}

    $query = $this->db->get_where('usuarios', array('login' => $login, 'excluido' => 0));
    return $query->row_array();
	}

  public function get_all ( $where = NULL ) {
    $this->db->where('excluido = 0');
    return parent::get_all();
  }

  public function getLog () {
    $this->db->select('logs.*, usuarios.nome AS usuario');
    $this->db->from('logs');
    $this->db->join('usuarios', 'usuarios.id = logs.id_usuario');
    return $this->db->get()->result();
  }

  public function insertLog ( $dados = NULL ) {
    return $this->db->insert('logs', $dados);
  }

}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */